<?php 
	include 'header.php'; 
	
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
               
               
               <div class="">
                 
                    <div class="row">
                
                      <div class="col-md-2 ">
                        <div class="form-group">
                        
   <h4 class="card-title">Post Your Ad For</h4>             
                            
                        </div>
                      </div>
                        
               <div class="col-md-4">
                       
                        
                         <select id="pageCat" class="form-control" name="form_select" onchange="test(this)">
<option value="hide">-- Select --</option>
<option value="2010">Facebook P age</option>
<option value="2011">YouTube Channel</option>
<option value="2012">Instagram Account</option>
<option value="2013">Website</option>

</select>
                            
                      
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
                        
                          <input type="text" id="pageName" class="form-control" placeholder="Write your page name">
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
                        
                          <input type="text" id="pageURL" class="form-control" placeholder="Enter your page URL">
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
                        
                          <input type="text" id="pageDesc" class="form-control" placeholder="What is your page description">
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
                        
                          <input type="text" id="adDesc1" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
        <!--
                    <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <div class="custom-file-upload">

<input type="file" id="file" name="myfiles[]" multiple />
</div>
                      </div>




  
                      <div class="col-md-8">
                       <form class="form">
<input type="file" class="fileLoad" id="fileLoad-01">

</form>
                      </div>
                    </div>
        -->
        
        
        
           <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg1" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
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
                        
                          <input type="text" id="adDesc2" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
        
        
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg2" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
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
                        
                          <input type="text" id="adDesc3" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
           
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg3" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
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
                        
                          <input type="text" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
           
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="file4" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
                      </div>
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary pull-right" id="Proceed" >Proceed</button>
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
      <input type="text" class="form-control" placeholder="No. of clicks">
    </div>
    <div class="col">
     <span class="form-control">In</span>
    </div>
    <div class="col-5">
      <input type="text" class="form-control" placeholder="Enter days">
    </div>
       <div class="col">
     <span class="form-control">Days</span>
    </div>
  </div>
          <div class="form-row">
    <div class="col-12">
      <input type="text" class="form-control" placeholder="Select Category">
    </div>

    

  </div>
        
        
        <div class="form-row text-center">
    <div class="col-12">
      <button type="submit" id="itcost" class="btn btn-primary btn-lg-cus">
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
               
               
               
               
               
               
            
               
                </div>
             
          </div>
        </div>
      </div>
          
          
          

          
          
       <?php 
	include 'footer.php'; 
	
?>