			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="changepassword.php">
											<span class="link-collapse">Change Password</span>
										</a>
									</li>
									<li>
										<a href="makeadmins.php">
											<span class="link-collapse">Make Admins</span>
										</a>
									</li>
									<li>
										<a href="logout.php">
											<span class="link-collapse">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
					<li class="nav-item">
							<a href="index.php">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="advertisingusers.php">
								<i class="la la-users"></i>
								<p>Advertising Users</p>
								<span class="badge badge-count"><?= $advertisenum; ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="hostingusers.php">
								<i class="la la-users"></i>
								<p>Hosting Users</p>
								<span class="badge badge-count"><?= $hostnum; ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="adshistory.php">
								<i class="la la-keyboard-o"></i>
								<p>Ads History</p>
								<span class="badge badge-count"><?= $historyAdsnum; ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="pendingads.php">
								<i class="la la-th"></i>
								<p>Pending Ads</p>
								<span class="badge badge-count"><?= $pendingaddsNum; ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="currentads.php">
								<i class="la la-bell"></i>
								<p>Current Ads</p>
								<span class="badge badge-success"><?= $currentAdsnum; ?></span>
							</a>
						</li>
					</ul>
				</div>
			</div>