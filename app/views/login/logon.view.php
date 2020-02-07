<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?=SITE_URL?>images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Login</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner-2 shop-account">
        <!-- Product -->
        <div class="container">
            <div class="max-w500 m-auto bg-white m-b30">
                <div class="p-a30 job-bx browse-job radius-sm seth">
                    <div class="tab-content nav">
                        <form id="login" class="tab-pane active col-12 p-a0 " method="post">
                            <h4 class="font-weight-700">LOGIN</h4>
                            <!-- <p class="font-weight-600">If you have an account with us, please log in.</p>  -->
                            <div class="form-group">
                                <label class="font-weight-700">E-MAIL *</label>
                                <input name="email" id="email" required="" class="form-control" placeholder="Your Email Address" type="email" value="<?php echo isset($email)?$email:'' ?>" >
                            </div>
                            <div class="form-group">
                                <label class="font-weight-700">PASSWORD *</label>
                                <input name="password" id="password" required="" class="form-control " placeholder="Type Password" type="password">
                            </div>
                            <div class="text-left">
                                <button type="submit" name="login" id="login" class="site-button m-r5 button-lg">login</button>
                                <a data-toggle="tab" href="#forgot-password" class="m-l5 m-t15 forget-pass float-right"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
                            </div>
                        </form>
                        <form id="forgot-password" class="tab-pane fade  col-12 p-a0">
                            <h4 class="font-weight-700">FORGET PASSWORD ?</h4>
                            <p class="font-weight-600">We will send you an email to reset your password. </p>
                            <div class="form-group">
                                <label class="font-weight-700">E-MAIL *</label>
                                <input name="email" name="email"  required="" class="form-control" placeholder="Your Email Address" type="email" >
                            </div>
                            <div class="text-left">
                                <a class="site-button outline gray button-lg" data-toggle="tab" href="#login">Back</a>
                                <button class="site-button pull-right button-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->