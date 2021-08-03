
		<nav class="page-sidebar" data-pages="sidebar">
			<div class="sidebar-overlay-slide from-top" id="appMenu">
				<div class="row">
					<div class="col-xs-6 no-padding">
						<a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
						</a>
					</div>
					<div class="col-xs-6 no-padding">
						<a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 m-t-20 no-padding">
						<a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
						</a>
					</div>
					<div class="col-xs-6 m-t-20 no-padding">
						<a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
						</a>
					</div>
				</div>
			</div>
			<div class="sidebar-header">
				<a href="index.php"><img style="margin-top:20px !important;" src="assets/img/dc.png" alt="logo" class="brand" data-src="assets/img/dc.png" data-src-retina="assets/img/dc.png" width="60" height="60"></a>
				<div class="sidebar-header-controls">
					<button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-toggle-pin="sidebar" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
					</button>
					<button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
					</button>
				</div>
			</div>
			<div class="sidebar-menu">
				<ul class="menu-items">
					<li class="m-t-40 ">
						<a href="index.php" class="detailed">
							<span class="title">Dashboard</span>
							<!--<span class="details">12 New Updates</span>-->
						</a>
						<span style="background-color: #10bef0 !important; color:#fff;" class=" icon-thumbnail"><i style="padding: 10px !important;" class="pg-home"></i></span>
					</li>
				
					<li>
						<a href="javascript:;"><span class="title">Pages</span>
						<span class=" arrow"></span></a>
						<span class="icon-thumbnail"><i style="padding: 10px !important;" class="fs-14 pg-ui"></i></span>
						<ul class="sub-menu">
							<li class="">
								<a href="home.php" style="color: #fff !important; font-weight: bold !important;">Home Page</a>
								<span class="icon-thumbnail">HP</span>
							</li>
							
							<li class="">
								<a href="sound.php" style="color: #fff !important; font-weight: bold !important;">Sound</a>
								<span class="icon-thumbnail">S</span>
							</li>
							
							<!--<li class="">
								<a href="speakers.php" style="color: #fff !important; font-weight: bold !important;">Speaker Page</a>
								<span class="icon-thumbnail">SP</span>
							</li>-->
						</ul>
					</li>


					<li>
						<a href="javascript:;"><span class="title">Tools</span>
						<span class=" arrow"></span></a>
						<span class="icon-thumbnail"><i style="padding: 10px !important;" class="fs-14 pg-ui"></i></span>
						<ul class="sub-menu">
							<!--<li>
								<br>
								<a  href="registerxy.php" style="color: #fff !important; font-weight: bold !important;" >Add Admin</a>
								<span style="color: #fff !important; font-weight: bold !important;" class=" arrow"></span></a>
								<span style="color: #fff !important; font-weight: bold !important;" class="icon-thumbnail"><i style="padding: 10px !important;" class="fs-14 pg-ui"></i></span>
							</li>-->

							<li>
								<a>
									<form action="settings.php" method="post">
										<input type="hidden" name="user_id" value="<?php echo $_SESSION['username']; ?>">
										<button type="submit" name="edit_password_btn" style="background-color:#78bdff !important; border:none;"  class="settingsbtn btn btn-regular clearfix bg-master-lighter dropdown-item"> Settings <i class="pg-settings_small"></i></button>
									</form>
								</a>
							</li>
							<li>
								<a>
									<form action="logout.php" method="POST">
										
										<button type="submit" name="logout_btn" class="btn btn-primary clearfix bg-master-lighter dropdown-item">
											Logout
											<i class="pg-power"></i>
										</button>
									</form>
								</a>
							</li>
						</ul>
					</li>

				</ul>
				<div class="clearfix"></div>
			</div>
		</nav>