<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $('#formSignup').validate({
            rules: {
                fname: 'required',
                lname: 'required',
                email: {
                    required: true,
                    email: true,
                    remote: '/account/validateEmail'
                },
                password: {
                    required: true,
                    minlength: 6,
                    validPassword: true
                },
                /*
                password_confirmation: {
                    equalTo: '#password'
                }
                */
            },
            messages: {
                email: {
                    remote: 'Email Already Taken !!'
                }
            }
        });

        /**
         * Show password toggle button
         */
        $('#password').hideShowPassword({
            show: false,
            innerToggle: 'focus'
        });
    });
</script>
<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?=SITE_URL?>images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Register</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="section-full content-inner browse-job shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-b30">
                    <div class="p-a30 job-bx max-w500 radius-sm bg-white m-auto">

                        <?php
                         if(!empty($errors)) {
                         ?>
                        <p>Errors:</p>
                        <ul>
                            <?php
                             foreach ($errors as $key => $value) {
                                 ?>
                                 <li><?php echo $value;?></li>
                             <?php
                             }
                            ?>
                        </ul>

                        <?php
                         }
                        ?>
                        <div class="tab-content">
                            <form id="formSignup" class="tab-pane active" method="post" action="">
                                <h4 class="font-weight-700 m-b5">PERSONAL INFORMATION</h4>
                                <p class="font-weight-600">If you have an account with us, please log in.</p>
                                <div class="form-group">
                                    <label class="font-weight-700">First Name *</label>
                                    <input name="fname" id="fname"  class="form-control" placeholder="First Name" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700">Last Name *</label>
                                    <input name="lname" id="lname" required="" class="form-control" placeholder="Last Name" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700">E-MAIL *</label>
                                    <input name="email" id="email" required="" class="form-control" placeholder="Your Email Address" type="email">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-700">Password *</label>
                                    <input name="password" id="password" required="" class="form-control " placeholder="Type Password" type="password">
                                </div>
                                <!--
                                <div class="form-group">
                                    <label class="font-weight-700">Confirm Password *</label>
                                    <input name="password_confirmation" id="password_confirmation" required="" class="form-control " placeholder="Type Password" type="password">
                                </div>
                                -->

                                <div class="text-left">
                                    <button type="submit" name="save" id="save" class="site-button button-lg outline outline-2">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->

