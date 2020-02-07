<!-- header -->
<?php 
$mainActive = '';
$dashboardActive=$PostsActive=$candidateActive=$usersActive= false;

if(isset($_SESSION['mainActive'])){
	$mainActive =$_SESSION['mainActive'];
}
if($mainActive === 1 ){
	$dashboardActive = true ; 
}else if($mainActive === 2 ){
	$PostsActive = true ; 
}else if($mainActive === 3 ){
	$candidateActive = true ; 
}else if($mainActive == 4 ){
	$usersActive = true ; 
}
?>
    <header class="site-header mo-left header border-bottom  fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="<?= SITE_URL ?>employer/aboutus"><img src="../images/logo.png" class="logo" alt="" style='padding-top: 5px;'></a>
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
                            <a href="<?= SITE_URL ?>employer/edit_company" class="site-button"><i class="fa fa-user"></i> <?= $text_Profile ?></a>
							<!--<a href="" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details" class="site-button"><i class="fas fa-sign-out-alt"></i>  <?= $text_logout ?></a>-->
							<a href="<?= SITE_URL ?>login/logout" title="READ MORE" style='background-color: #f1050596;' class="site-button"><i class="fas fa-sign-out-alt"></i>  <?= $text_logout ?></a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<!--<li class="active">
								<a href="/employer/"><?= $text_dashboard ?> </a>
							</li>-->
							<li <?php if ($dashboardActive){echo 'class="active"';} ?> >
								<a href="<?= SITE_URL ?>employer/"><?= $text_dashboard ?> </a>
							</li>
							<li>
								<a href="#"><?= $text_POSTS  ?><i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="<?= SITE_URL ?>employer/manage_jobs" class="dez-page"><?= $text_Manage_jobs ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/manage_internships" class="dez-page"><?= $text_manage_internships ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/search_all_posts" class="dez-page"><?= $text_Search_All_posts  ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/add_job" class="dez-page"><?= $text_add_new_job  ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/add_internship" class="dez-page"><?= $text_add_new_internship  ?></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><?= $text_Candidates  ?> <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
									<li><a href="<?= SITE_URL ?>employer/search_cvs" class="dez-page"><?= $text_search_CVs  ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/unlocked_candidates" class="dez-page"><?= $text_unlocked_Candidates  ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/folder_labels" class="dez-page"><?= $text_Folder_labels  ?></a></li>
									<li><a href="<?= SITE_URL ?>employer/track_inivtations" class="dez-page"><?= $text_Track_Invitations  ?></a></li>
								</ul>
							</li>
							<li>
								<a href="<?= SITE_URL ?>employer/manage_users"><?= $text_USERS  ?></a>
							</li>
							
							<li><a href="<?= SITE_URL ?>language" class="dez-page"><?= $_SESSION['lang'] == 'ar' ? 'En' : 'عربي' ?> <i class="fa fa-globe" style="font-size: 18px;"></i></a></li>
						</ul>			
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
<!-- header END -->