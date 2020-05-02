<?php 

include 'header.php';	

if(!$_SESSION['email']) {
    
    echo 'Yasser';
}

$userEmail = $_SESSION['email'];

$adverObj = new User($conn, $userEmail);

    
    
?>

<script >
$(document).ready(function(){
  $("a[name=copy_pre]").click(function() {
    var id = $(this).attr('id');
    var el = document.getElementById(id);
    var range = document.createRange();
    range.selectNodeContents(el);
    var sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
    document.execCommand('copy');
    md.showNotification('top','left', 'success', 'Link copied to clipboard.');
    return false;
  });
});
</script>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Accepted Ads</h4>
                  <p class="card-category">Your Accepted Ads</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php

                      if ($acceptedAddsNum == 0 ){
                        echo " No Pending adds yet ";
                        }else { echo ' 
                      <table class="table table-hover" id="acceptedadtableid">
                      <thead class=" text-primary">
                        <th>Ad ID</th>
                        <th>Page Name</th>
                        <th>Page URL</th>
                        <th>Page Description</th>
                        <th>AD Duration </th>
                        <th>Link</th>
                        <th>Copy</th>
                      </thead>
                      <tbody>';
                        foreach($acceptedAddsData as $acceptedAddData){
                          $adv_id = $acceptedAddData['id'];                          
                          $hostlinksNum = $advertise->getAdsLinksForHostNum($conn,$user_id,$adv_id);
                          $hostlinks = $advertise->getAdsLinksForHost($conn,$user_id,$adv_id);
                          foreach($hostlinks as $links){
                            $hostlink = $links['link'];
                          }

                          ?>                      
                          <tr>
                          <td><?= $acceptedAddData['id']; ?></td>
                          <td><?= $acceptedAddData['pagename']; ?></td>
                          <td><?= $acceptedAddData['pageurl']; ?></td>
                          <td><?= $acceptedAddData['pagedescription'];?></td>
                          <th><?= $acceptedAddData['period']  ?> Day</th>
                          <?php 
                          if($hostlinksNum == 0){
                            echo "<td> Not started Yet</td>";
                          }else {
                            echo "<td id='copyContent'> $hostlink </td>";
                          } ?>
                                                    
                          <!--<td class="text-info"><a href="adDetails.php?adv_id=<?= $adv_id; ?>"><button class="btn btn-primary">Details </button></a></td>
                        </tr> -->

                            <td class="text-info"><a id="copyContent" href="#" name="copy_pre" ><button class="btn btn-primary">Copy</button></a></td>
                        </tr> 

                        <?php 
                        }
                        
                        } 
                         ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>  
            </div>
        </div>
      </div>
          <?php 
	include 'footer.php'; 
	
?>