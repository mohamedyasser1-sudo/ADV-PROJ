<?php
include 'header.php';
if(!isset($_SESSION['email'])){
header("Location: ../../login.php");
}
include 'postadvhandler.php';
$message = "";
$adv_id= $_GET['adv_id'];
$advdetails = $advertise->getAdvData($conn,$adv_id);
$imagedir= "../../uploads/images/";
?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Ad Details</h4>
        <p class="card-category">Here you find your Ad Details</p>
      </div>
      <br>
      <div class="card-body">
        <form action="#"  method="post" enctype="multipart/form-data">
          
          <div class="">
            
            <div class="row">
              
              <div class="col-md-2 ">
                <div class="form-group">
                  
                  <h4 class="card-title">Ad For</h4>
                  
                </div>
              </div>
              <?php
              foreach($advdetails as $advdetail){
              $image1= $advdetail['image1'];
              $image2= $advdetail['image2'];
              $image3= $advdetail['image3'];
              $image4= $advdetail['image4'];
              $desc1 = $advdetail['description1'];
              $desc2 = $advdetail['description2'];
              $desc3 = $advdetail['description3'];
              $desc4 = $advdetail['description4'];
              ?>
              <div class="col-md-4">
                <input type="text" class="form-control" disabled placeholder="<?= $advdetail['pagetype']; ?>">            
              </div>
            </div>
            
            
            <div class="clearfix"></div>
            
          </div>
          
          <div id="show">
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label class="bmd-label-floating">Page Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group"> 
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['pagename']; ?>">
                </div>
              </div>              
            </div>
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Page URL</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['pageurl']; ?>">
                </div>
              </div>
              
            </div>
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Page Description</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['pagedescription']; ?>">
                </div>
              </div>
              
            </div>
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Description</label>                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">            
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['description1']; ?>">
                </div>
              </div>
              <?php //$imagedir.$image1; ?>
            </div>
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="custom-file-upload">                            
                  <img style="max-width: 100px; height: 100px;" src="<?= $imagedir.$image1; ?>">
                </div>
              </div>
            </div>
            
        <?php 
        if(!empty($desc2) & !empty($image2)){
          echo '<div class=" pageDesBloc1">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group ">
                    <label class="bmd-label-floating">Description</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    
                    <input type="text" name="desc2" id="adDesc2" class="form-control" placeholder="<?= $decs2 ?>" disabled>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-2">                 
                </div>                
                <div class="col-md-8">                 
                  <div class="custom-file-upload">
                    <img src="<?= $imagedir.$image2; ?>">
                  </div>
                </div>
              </div>
            </div>';
        }
         ?>

          <?php 
          if(!empty($desc3) & !empty($image3)){  
            echo '<div class=" pageDesBloc2">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group ">
                    <label class="bmd-label-floating">Description</label>            
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">          
                    <input type="text" name="desc3" id="adDesc3" class="form-control" placeholder="<?= $desc3; ?>" disabled>
                  </div>
                </div>               
              </div>             
              <div class="row">
                <div class="col-md-2">        
                </div>              
                <div class="col-md-8">                 
                  <div class="custom-file-upload">
                    <img src="<?= $imagedir.$image3; ?>">
                  </div>
                </div>
              </div>
            </div>';
          }
            ?>

        <?php 
          if(!empty($desc4) & !empty($image4)){  
            echo '<div class=" pageDesBloc2">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group ">
                    <label class="bmd-label-floating">Description</label>            
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">          
                    <input type="text" name="desc4" id="adDesc4" class="form-control" placeholder="<?= $desc4; ?>" disabled>
                  </div>
                </div>               
              </div>             
              <div class="row">
                <div class="col-md-2">        
                </div>              
                <div class="col-md-8">                 
                  <div class="custom-file-upload">
                    <img  src="<?= $imagedir.$image4; ?>">
                  </div>
                </div>
              </div>
            </div>';
          }
            ?>


                      
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">No. Clicks</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['clicks']; ?>">
                </div>
              </div>
              
            </div>
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Days</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['period']; ?>">
                </div>
              </div>
              
            </div>
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Categories</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" class="form-control" disabled placeholder="<?= $advdetail['requiredcat1'] ." & ". $advdetail['requiredcat2']; ?>">
                </div>
              </div>
              <?php } ?>
            </div>
            
          </div>
          
          
          
          
          
          
          <!-- Modal -->
          <div class="modal fade" id="modalClick" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Clicks Numbers</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4 class="text-center">How many clicks you want to get for your Ad?</h4>
                  
                  <div class="form-row form-row-cus">
                    <div class="col-5">
                      <select  name="pagetype"  class="form-control">
                        <?php
                        foreach($clickcounts as $clickcount){
                        ?>
                        <option value='<?= $clickcount['LOOKUP_VALUE']; ?>'><?= $clickcount['LOOKUP_LABEL']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col">
                      <span class="form-control">In</span>
                    </div>
                    <div class="col-5">
                      <select  name="pagetype" class="form-control">
                        <?php
                        foreach($adsdurations as $adsduration){
                        ?>
                        <option value='<?= $adsduration['LOOKUP_VALUE']; ?>'><?= $adsduration['LOOKUP_LABEL']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col">
                      <span class="form-control">Days</span>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-12">
                      <select id="page-cat-basic-single" class="form-control "  name="pagetype" multiple="multiple">
                        <?php
                        foreach($categories as $category){
                        ?>
                        <option value='<?= $category['LOOKUP_VALUE']; ?>'><?= $category['LOOKUP_LABEL']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    
                  </div>
                  
                  
                  <div class="form-row text-center">
                    <div class="col-12">
                      <button type="submit" name="submitbtn" id="itcost" class="btn btn-primary btn-lg-cus">
                      It cost 10$
                      <br>
                      <span>Click to applay</span>
                      </button>
                      
                      
                    </div>
                    
                  </div>
                  
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
          
        </form>
        
        
        
        
        
        
        
      </div>
      
    </div>
  </div>
</div>
<?php
include 'footer.php';

?>