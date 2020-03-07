<?php
//session_start();
include 'header.php';
if(!isset($_SESSION['email'])){
header("Location: ../../login.php");
}
include 'postadvhandler.php';

//$message = "";


?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Posting Ad Process</h4>

        <p class="card-category">Here you will post you Ad for you [Page category] page</p>
      </div>
      <br>
      <div class="card-body">
        <form action="#"  method="post" enctype="multipart/form-data">
          
          <div class="">
            
            <div class="row">
              
              <div class="col-md-2 ">
                <div class="form-group">
                  
                  <h4 class="card-title">Post Your Ad For</h4>
                  
                </div>
              </div>
              
              <div class="col-md-4">
                <?php echo $message; ?>
                
                <select id="pageCat" class="form-control" name="pagetype" onchange="changeNamesHandler(event);">
                    <option value="">Selece a value</option>
                  <?php
                  foreach($pagetype as $type){ 
                  ?>
                  <option value='<?= $type['LOOKUP_VALUE']; ?>'><?= $type['LOOKUP_LABEL']; ?>
                    
                  </option>
                  <?php 
                    }
                  ?>
                </select>
                
                
              </div>
            </div>
            

            
            <div class="clearfix"></div>
            
          </div>
          
          <div id="show">
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label class="bmd-label-floating pname">Page Name</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="pagename" id="pageName" class="form-control" placeholder="Write your page name">
                </div>
              </div>
              
            </div>
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating purl">Page URL</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="pageurl" id="pageURL" class="form-control" placeholder="Enter your page URL">
                </div>
              </div>
              
            </div>
            
            
            
            
            
            
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating pdesc">Page Description</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="pagedesc" id="pageDesc" class="form-control" placeholder="What is your page description">
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
                  
                  <input type="text" name="desc1" id="adDesc1" class="form-control" placeholder="What is your page description">
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-2">
                
              </div>
              
              <div class="col-md-8">
                
                <div class="custom-file-upload">
                  <input type="file" id="pageImg1" name="image1" multiple class="fileLoad"/>
                </div>
              </div>
            </div>
            
            
            <div class="pageDesBloc pageDesBloc1">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Description</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="desc2" id="adDesc2" class="form-control" placeholder="What is your page description">
                </div>
              </div>
              
            </div>
            
            
            
            
            
            <div class="row">
              <div class="col-md-2">
                
              </div>
              
              <div class="col-md-8">
                
                <div class="custom-file-upload">
                  <input type="file" id="pageImg2" name="image2" multiple class="fileLoad"/>
                </div>
              </div>
            </div>
            
            </div>
            
              <div class="pageDesBloc pageDesBloc2">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Description</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="desc3" id="adDesc3" class="form-control" placeholder="What is your page description">
                </div>
              </div>
              
            </div>
            
            
            <div class="row">
              <div class="col-md-2">
                
              </div>
              
              <div class="col-md-8">
                
                <div class="custom-file-upload">
                  <input type="file" id="pageImg3" name="image3" multiple class="fileLoad"/>
                </div>
              </div>
            </div>
             </div>
              
            <div class="pageDesBloc pageDesBloc3">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                  <label class="bmd-label-floating">Description</label>
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input type="text" name="desc4" class="form-control" placeholder="What is your page description">
                </div>
              </div>
              
            </div>
            
            
            
            
            <div class="row">
              <div class="col-md-2">
                
              </div>
              
              <div class="col-md-8">
                
                <div class="custom-file-upload">
                  <input type="file" id="file4" name="image4" multiple class="fileLoad"/>
                </div>
              </div>
            </div>
            </div>
              
              
              
                        <div class="">
            <div class="row">
              <div class="col-md-2">
                <div class="form-group ">
                 
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  
                   <span  class="btn btn-primary pull-right adMore adMoreactive adMore1" >Add More</span>
                    <span  class="btn btn-primary pull-right adMore adMore2" >Add More</span>
                    <span  class="btn btn-primary pull-right adMore adMore3" >Add More</span>
                    <span  class="btn btn-primary pull-right removeMore  removeMore1" >Remove</span>
                    <span  class="btn btn-primary pull-right removeMore  removeMore2" >Remove</span>
                    <span  class="btn btn-primary pull-right removeMore  removeMore3" >Remove</span>
                </div>
              </div>
              
            </div>
       
            </div>
            
            <span  class="btn btn-primary pull-right" id="Proceed" >Proceed</span>
            <div class="clearfix"></div>
            
            
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
                  <select name="clickcount" class="form-control" id="clickcount" onchange="changeClickcountHandler(event);"> 
                       <option value="">Selece a value</option>
                  <?php
                  foreach($clickcounts as $clickcount){ 
                  ?>
                  <option  value='<?= $clickcount['LOOKUP_VALUE']; ?>'><?= $clickcount['LOOKUP_LABEL']; ?></option>
                  <?php 
                    }
                  ?>
                </select>
                    </div>
                    <div class="col">
                      <span class="form-control">In</span>
                    </div>
                    <div class="col-5">
                  <select name="days"  class="form-control disableElemenet" id="adsduration" onchange="changeAdsdurationHandler(event);" disabled>
                      <option value="">Selece a value</option>
                  <?php
                  foreach($adsdurations as $adsduration){ 
                  ?>
                  <option  value='<?= $adsduration['LOOKUP_VALUE']; ?>'><?= $adsduration['LOOKUP_LABEL']; ?></option>
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
                    <div class="col-10">
                  <select name="category" id="page-cat-basic-single" class="form-control" multiple="multiple" onchange="changeCatHandler(event);" disabled>
                     
                  <?php
                  foreach($categories as $category){ 
                  ?>
                  <option  value='<?= $category['LOOKUP_VALUE']; ?>'><?= $category['LOOKUP_LABEL']; ?></option>
                  <?php 
                    }
                  ?>
                </select>
                    </div>
                    
                       <div class="col-2">
                      <span class="form-control editCat">Edit Cat</span>
                    </div>
                  </div>
                  
                  
                  <div class="form-row text-center">
                    <div class="col-12">
                      <button type="submit" name="submitbtn" id="itcost" class="btn btn-primary btn-lg-cus" disabled>
                      It cost 
                          <span id="price">-</span> $
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
          <?= $message; ?>
        </form>
        
        
        
        
        
        
        
      </div>
      
    </div>
  </div>
</div>

  <script  src="../assets/js/managePrice.js"></script>


<?php
  include 'footer.php';
  
?>