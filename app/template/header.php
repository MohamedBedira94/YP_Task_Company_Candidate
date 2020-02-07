<!-- header -->
    <header class="site-header mo-left header border-bottom  fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container-fluid clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="<?= SITE_URL ?>"><img src="images/logo.png" class="logo" alt="" style='    padding-top: 2px;'></a>
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="<?= SITE_URL ?>register/signup" class="site-button" style='background: #34ac79!important;'><i class="fa fa-user"></i> Join Now</a>
                            <a href="<?= SITE_URL ?>login/logon" class="site-button"><i class="fa fa-lock"></i> login </a>
							<!-- <a href="#" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details" class="site-button"><i class="fa fa-lock"></i> login </a>  -->
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="active">
								<a href="<?= SITE_URL ?>">Home </a>
							<!--	<ul class="sub-menu">
									<li><a href="index.html" class="dez-page">Home 1</a></li>
									<li><a href="index-2.html" class="dez-page">Home 2</a></li>
								</ul>-->
							</li>
							<li>
							<a href ="#" > pricing plans </a>
							</li>
							<li>
							<a href ="<?= SITE_URL ?>index/search_candidates" > Search Candidates </a>
							</li>
							<!--<li>
								<a href="#">For Candidates <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
                                    <li><a href="/candidate/profileAdd" class="dez-page">My Profile<span class="new-page">New</span></a></li>
									<li><a href="/candidate/resumeAdd" class="dez-page">My Resume <span class="new-page">New</span></a></li>
									<li><a href="/candidate/jobApplied" class="dez-page">Applied Job <span class="new-page">New</span></a></li>
									<li><a href="/candidate/jobAlerts" class="dez-page">Jobs Alerts <span class="new-page">New</span></a></li>
									<li><a href="/candidate/jobSaved" class="dez-page">Saved Job <span class="new-page">New</span></a></li>
									<li><a href="/candidate/cvManager" class="dez-page">CV Manager <span class="new-page">New</span></a></li>
									<li><a href="/candidate/changePassword" class="dez-page">Change Password <span class="new-page">New</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">For Employers <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="company-profile.html" class="dez-page">Company Profile <span class="new-page">New</span></a></li>
									<li><a href="company-resume.html" class="dez-page">Employer Resume <span class="new-page">New</span></a></li>
									<li><a href="company-post-jobs.html" class="dez-page">Post A Jobs <span class="new-page">New</span></a></li>
									<li><a href="company-manage-job.html" class="dez-page">Manage jobs <span class="new-page">New</span></a></li>
									<li><a href="company-transactions.html" class="dez-page">Transactions <span class="new-page">New</span></a></li>
									<li><a href="browse-candidates.html" class="dez-page">Browse Candidates</a></li>
								</ul>
							</li>-->
							<!--
							<li>
								<a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="about-us.html" class="dez-page">About Us</a></li>
									<li><a href="job-detail.html" class="dez-page">Job Detail</a></li>
									<li><a href="companies.html" class="dez-page">companies</a></li>
									<li><a href="free-job-alerts.html" class="dez-page">free job alerts <span class="new-page">New</span></a></li>
									<li><a href="#" class="dez-page">Browse Job <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="browse-job-list.html" class="dez-page">browse job list</a></li>
											<li><a href="browse-job-grid.html" class="dez-page">browse job grid <span class="new-page">New</span></a></li>
											<li><a href="browse-job-filter-list.html" class="dez-page">browse filter list <span class="new-page">New</span></a></li>
											<li><a href="browse-job-filter-grid.html" class="dez-page">browse filter grid <span class="new-page">New</span></a></li>
										</ul>
									</li>
									<li><a href="#" class="dez-page">Jobs<i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="category-all-jobs.html" class="dez-page">all jobs <span class="new-page">New</span></a></li>
											<li><a href="category-company-jobs.html" class="dez-page">company jobs <span class="new-page">New</span></a></li>
											<li><a href="category-designations-jobs.html" class="dez-page">designations jobs <span class="new-page">New</span></a></li>
											<li><a href="category-jobs.html" class="dez-page">category jobs <span class="new-page">New</span></a></li>
											<li><a href="category-location-jobs.html" class="dez-page">location jobs <span class="new-page">New</span></a></li>
											<li><a href="category-skill-jobs.html" class="dez-page">skill jobs <span class="new-page">New</span></a></li>
										</ul>
									</li>									
									<li><a href="#" class="dez-page">Portfolio <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="portfolio-grid-2.html" class="dez-page">Portfolio Grid 2 </a></li>
											<li><a href="portfolio-grid-3.html" class="dez-page">Portfolio Grid 3 </a></li>
											<li><a href="portfolio-grid-4.html" class="dez-page">Portfolio Grid 4 </a></li>
										</ul>
									</li>
									<li><a href="#" class="dez-page">Login <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="login.html" class="dez-page">login 1</a></li>
											<li><a href="login-2.html" class="dez-page">login 2 <span class="new-page">New</span></a></li>
											<li><a href="login-3.html" class="dez-page">login 3 <span class="new-page">New</span></a></li>
										</ul>
									</li>
									<li><a href="#" class="dez-page">register <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="register.html" class="dez-page">register 1</a></li>
											<li><a href="register-2.html" class="dez-page">register 2 <span class="new-page">New</span></a></li>
										</ul>
									</li>
									<li><a href="error-404.html" class="dez-page">Error 404</a></li>
									<li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
									<li><a href="contact.html" class="dez-page">Contact Us</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									<li><a href="blog-classic-sidebar.html" class="dez-page">Classic Sidebar</a></li>
									<li><a href="blog-detailed-grid.html" class="dez-page">Detailed Grid</a></li>
									<li><a href="blog-detailed-grid-sidebar.html" class="dez-page">Detailed Grid Sidebar</a></li>
									<li><a href="blog-left-img.html" class="dez-page">Left Image Sidebar</a></li>
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul>
							</li>
							-->
							<li><a href="<?= SITE_URL ?>language" class="dez-page"><?= $_SESSION['lang'] == 'ar' ? 'En' : 'عربي' ?> <i class="fa fa-globe" style="font-size: 18px;"></i></a></li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
<!-- header END -->