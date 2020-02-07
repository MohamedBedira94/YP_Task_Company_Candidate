<!-- Content -->
<div class="page-content bg-white">
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <div class="section-full bg-white browse-job p-t50 p-b20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 m-b30">
                        <div class="sticky-top">
                            <div class="candidate-info">
                                <div class="candidate-detail text-center">
                                    <div class="canditate-des">
                                        <a href="javascript:void(0);">
                                            <img alt="" src="<?=SITE_URL?>images/team/pic1.jpg">
                                        </a>
                                        <div class="upload-link" title="update" data-toggle="tooltip" data-placement="right">
                                            <input type="file" class="update-flie">
                                            <i class="fa fa-camera"></i>
                                        </div>
                                    </div>
                                    <div class="candidate-title">
                                        <div class="">
                                            <h4 class="m-b5"><a href="javascript:void(0);">David Matin</a></h4>
                                            <p class="m-b0"><a href="javascript:void(0);">Web developer</a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php include_once ('inc.sidbarMnu_cand.php');?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 m-b30">
                        <div class="job-bx job-profile">
                            <div class="job-bx-title clearfix">
                                <h5 class="font-weight-700 pull-left text-uppercase">Change Password</h5>
                                <a href="jobs-cv-manager.html" class="site-button right-arrow button-sm float-right">Back</a>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>New Password </label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirm New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 m-b10">
                                        <button class="site-button">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Browse Jobs END -->
    </div>
</div>
<!-- Content END-->
<!-- Modal Box -->
<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body row m-a0 clearfix">
                <div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image:url(images/background/bg3.jpg);  background-position:center; background-size:cover;">
                    <div class="form-info text-white align-self-center">
                        <h3 class="m-b15">Login To You Now</h3>
                        <p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
                        <ul class="list-inline m-a0">
                            <li><a href="#" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 p-a0">
                    <div class="lead-form browse-job text-left">
                        <form>
                            <h3 class="m-t0">Personal Details</h3>
                            <div class="form-group">
                                <input value="" class="form-control" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                                <input value="" class="form-control" placeholder="Mobile Number"/>
                            </div>
                            <div class="clearfix">
                                <button type="button" class="btn-primary site-button btn-block">Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Box End -->