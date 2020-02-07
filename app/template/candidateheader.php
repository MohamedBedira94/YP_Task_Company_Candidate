<!-- header -->
<header class="site-header mo-left header border-bottom  fullwidth">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="<?= SITE_URL ?>"><img src="../images/logo.png" class="logo" alt="" style="max-height: 100px; max-width: 100px;"></a>
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
                        <!--
                        <a href="/register/signup" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
                        <a href="/login/logon" class="site-button"><i class="fa fa-lock"></i> login </a>
                        -->
                        <?php if(\DEK\Auth::isLoggedIn()){
                            $data = \DEK\Auth::getUser($_SESSION['userid']);
                            ?>
                            Welcome <span><?=$data->fname." ".$data->lname;?></span>
                        <a href="<?= SITE_URL ?>login/logout" class="site-button" style="background-color: #f1050596;"><i class="fa fa-sign-out "></i> Logout</a>
                         <?php }else{
                            ?>
                            <!-- <a href="<?= SITE_URL ?>login/logout" class="site-button" style="background-color: #f1050596;"><i class="fa fa-sign-out "></i> welcome</a>  -->
                            <?php
                        }?>
                        <!-- <a href="#" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details" class="site-button"><i class="fa fa-lock"></i> login </a>  -->
                    </div>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?= SITE_URL ?>home">Home <i class="fa fa-chevron-down"></i></a>
                           <!-- <ul class="sub-menu">
                                <li><a href="index.html" class="dez-page">Home 1</a></li>
                                <li><a href="index-2.html" class="dez-page">Home 2</a></li>
                            </ul>-->
                        </li>
                        <li class="active">
                            <a href="#">For Candidates <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <!-- <li><a href="jobs-profile.html" class="dez-page">My Profile<span class="new-page">New</span></a></li>  -->
                                <li><a href="<?= SITE_URL ?>candidate/profileAdd" class="dez-page">My Profile<span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/resumeAdd" class="dez-page">My Resume <span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/jobApplied" class="dez-page">Applied Job <span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/jobAlerts" class="dez-page">Jobs Alerts <span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/jobSaved" class="dez-page">Saved Job <span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/cvManager" class="dez-page">CV Manager <span class="new-page">New</span></a></li>
                                <li><a href="<?= SITE_URL ?>candidate/changePassword" class="dez-page">Change Password <span class="new-page">New</span></a></li>
                            </ul>
                        </li>

                        <li><a href="<?= SITE_URL ?>language" class="dez-page">تغيير اللغة <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->
