<?php 
	include 'header.php'; 
	include 'nav.php';
	include 'sidebar.php';
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Verify Host Users Pages Table</div>
									</div>
									<div class="card-body">
<!-- 										<div class="card-sub">
											you can see all Hosts Pages here
										</div> -->
										<div class="table-responsive">
											<table class="table table-bordered">
										<?php 
										if($verifyPagesNum == 0 ){
											echo '<div class="card-sub">
													There is no new pages to verify 
												  </div>';
										}else{
											echo '<thead>
													<tr>
														<th>Page ID</th>
														<th>User ID</th>
														<th>Page Name</th>
														<th>Page Url</th>
														<th># of Followers</th>
														<th>Category</th>
														<th>Actions</th>
													</tr>
												</thead>';
										 
										foreach($hostpagesdata as $hostpagedata){
										$pagestatus = $hostpagedata['status'];
										$useridforverify = $hostpagedata['user_id'];


										?>
												<tbody>
													<tr>
														<th scope="row"><?= $hostpagedata['id']; ?></th>
														<td><a href="userdetails.php?id= <?= $useridforverify ?>"><?= $hostpagedata['user_id']; ?></a></td>
														<td><?= $hostpagedata['name']; ?></td>
														<td><?= $hostpagedata['url']; ?></td>
														<td><?= $hostpagedata['followers']; ?></td>
														<td><?= $hostpagedata['category']; ?></td>

														<td>
															<?php  
														if($pagestatus == 0 ){
								
														echo
														"<a href='verifyuser.php?hostid=$useridforverify' ><button class='btn btn-success'>Verify</button> </a>";
													}
													elseif($pagestatus == 1){
														echo
														"<a href='blockuser.php?hostid=$useridforverify' ><button class='btn btn-danger disabled'>Waiting to verify</button></a>";
													}
															?>
														</td>
											
													</tr>
													<?php }} ?>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

          <!-- Modal -->
          <form>
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
                  <select name="clickcount" class="form-control"> 
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
                  <select name="days"  class="form-control">
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
                    <div class="col-12">
                  <select name="category" id="page-cat-basic-single" class="form-control " multiple="multiple">
                  <?php
                  foreach($categories as $category){ 
                  ?>
                  <option  value='<?= $category['LOOKUP_VALUE']; ?>'><?= $category['LOOKUP_LABEL']; ?></option>
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
          <?= $message; ?>
        </form>					


<?php 
	include 'footer.php';
?>