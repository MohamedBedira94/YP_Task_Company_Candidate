<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="overlay-black-dark profile-edit p-t50 p-b20" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 candidate-info">
                    <div class="candidate-detail">
                        <div class="canditate-des text-center">
                            <a href="javascript:void(0);">
                                <img alt="" src="<?= SITE_URL?>emp_profiles/<?php echo $candidate->profile_img ;?>">
                            </a>
                            <div class="upload-link" title="update" data-toggle="tooltip" data-placement="right">
                                <input type="file" class="update-flie">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                        <div class="text-white browse-job text-left">
                            <h4 class="m-b0"><?= $candidate->first_name . " " .$candidate->midle_name  ." " . $candidate->last_name ?>
                                <a class="m-l15 font-16 text-white" data-toggle="modal" data-target="#profilename" href="#"><i class="fa fa-pencil"></i></a>
                            </h4>
                            <p class="m-b15"><?= $candidate->tag_lines ?></p>
                            <ul class="clearfix">
                                <li><i class="ti-location-pin"></i> Sacramento, California</li>
                                <li><i class="ti-mobile"></i> +1 123 456 7890</li>
                                <li><i class="ti-briefcase"></i> Fresher</li>
                                <li><i class="ti-email"></i> info@example.com</li>
                            </ul>
                            <div class="progress-box m-t10">
                                <div class="progress-info">Profile Strength (Average)<span>70%</span></div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 80%" role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <a href="javascript:void(0);">
                        <div class="pending-info text-white p-a25">
                            <h5>Pending Action</h5>
                            <ul class="list-check secondry">
                                <li>Verify Mobile Number</li>
                                <li>Add Preferred Location</li>
                                <li>Add Resume</li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade browse-job modal-bx-info editor" id="profilename" tabindex="-1" role="dialog" aria-labelledby="ProfilenameModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ProfilenameModalLongTitle">Basic Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="fresher" name="example1">
                                                    <label class="custom-control-label" for="fresher">Fresher</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="experienced" name="example1">
                                                    <label class="custom-control-label" for="experienced">Experienced</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Select Your Country</label>
                                        <select>
                                            <option>India</option>
                                            <option>Australia</option>
                                            <option>Bahrain</option>
                                            <option>China</option>
                                            <option>Dubai</option>
                                            <option>France</option>
                                            <option>Germany</option>
                                            <option>Hong Kong</option>
                                            <option>Kuwait</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Select Your Country</label>
                                        <input type="text" class="form-control" placeholder="Select Your Country">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Select Your City</label>
                                        <input type="text" class="form-control" placeholder="Select Your City">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Telephone Number</label>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input type="text" class="form-control" placeholder="Country Code">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input type="text" class="form-control" placeholder="Area Code">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <h6 class="m-a0 font-14">info@example.com</h6>
                                        <a href="#">Change Email Address</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                        <button type="button" class="site-button">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <div class="section-full browse-job content-inner-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 m-b30">
                        <div class="sticky-top bg-white">
                            <div class="candidate-info onepage">
                                <ul>
                                    <li><a class="scroll-bar nav-link" href="#key_skills_bx">
                                            <span>General Info</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#key_skills_bx">
                                            <span>Key Skills</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#employment_bx">
                                            <span>Employment</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#education_bx">
                                            <span>Education</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#it_skills_bx">
                                            <span>IT Skills</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#projects_bx">
                                            <span>Projects</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#profile_summary_bx">
                                            <span>Profile Summary</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#accomplishments_bx">
                                            <span>Accomplishments</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#desired_career_profile_bx">
                                            <span>Desired Career Profile</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#personal_details_bx">
                                            <span>Personal Details</span></a></li>
                                    <li><a class="scroll-bar nav-link" href="#attach_resume_bx">
                                            <span>Attach Resume</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">

                        <div id="key_skills_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">Key Skills</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#keyskills" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <div class="job-time mr-auto">
                                <a href="javascript:void(0);"><span>Javascript</span></a>
                                <a href="javascript:void(0);"><span>CSS</span></a>
                                <a href="javascript:void(0);"><span>HTML</span></a>
                                <a href="javascript:void(0);"><span>Bootstrap</span></a>
                                <a href="javascript:void(0);"><span>Web Designing</span></a>
                                <a href="javascript:void(0);"><span>Photoshop</span></a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="keyskills" tabindex="-1" role="dialog" aria-labelledby="KeyskillsModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="KeyskillsModalLongTitle">Key Skills</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is the first thing recruiters notice in your profile. Write concisely what makes you unique and right person for the job you are looking for.</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control tags_input" value="html,css,bootstrap,photoshop"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                        <div id="employment_bx" class="job-bx bg-white m-b30 ">
                            <div class="d-flex">
                                <h5 class="m-b15">Employment</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#employment" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <h6 class="font-14 m-b0">Junior Software DeveloperEdit</h6>
                            <p class="m-b0">W3itexperts</p>
                            <p class="m-b0">Oct 2015 to Present (3 years 4 months)</p>
                            <p class="m-b0">Available to join in 1 Months</p>
                            <p class="m-b0">Junior Software Developer</p>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="employment" tabindex="-1" role="dialog" aria-labelledby="EmploymentModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EmploymentModalLongTitle">Add Employment</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Your Designation</label>
                                                            <input type="email" class="form-control" placeholder="Enter Your Designation">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Your Organization</label>
                                                            <input type="email" class="form-control" placeholder="Enter Your Organization">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Is this your current company?</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="employ_yes" name="example1">
                                                                        <label class="custom-control-label" for="employ_yes">Yes</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="employ_no" name="example1">
                                                                        <label class="custom-control-label" for="employ_no">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Started Working From</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Worked Till</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Describe your Job Profile</label>
                                                            <textarea class="form-control" placeholder="Type Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                        <div id="education_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">Education</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#education" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <p>Mention your employment details including your current and previous company work experience</p>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="education" tabindex="-1" role="dialog" aria-labelledby="EducationModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="EducationModalLongTitle">Education</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Education</label>
                                                            <select>
                                                                <option>Doctorate/PhD</option>
                                                                <option>Masters/Post-Graduation</option>
                                                                <option>Graduation/Diploma</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Course</label>
                                                            <input type="email" class="form-control" placeholder="Select Course">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>University/Institute</label>
                                                            <input type="email" class="form-control" placeholder="Select University/Institute">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">London - 12th</label>
                                        <span class="clearfix font-13">2017</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">London - 10th</label>
                                        <span class="clearfix font-13">2015</span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="clearfix">Add Doctorate/PhD</a>
                            <a href="javascript:void(0);" class="clearfix">Add Masters/Post-Graduation</a>
                            <a href="javascript:void(0);" class="clearfix">Add Graduation/Diploma</a>
                        </div>
                        <div id="it_skills_bx" class="job-bx table-job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">IT Skills</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#itskills" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <p>Mention your employment details including your current and previous company work experience</p>
                            <table>
                                <thead>
                                <tr>
                                    <th>Skills</th>
                                    <th>Version</th>
                                    <th>Last Used</th>
                                    <th>Experience</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td>3</td>
                                    <td>2018</td>
                                    <td>1 Year 5 Months</td>
                                    <td><a class="m-l15 font-14" data-toggle="modal" data-target="#itskills" href="#"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td>4</td>
                                    <td>2013</td>
                                    <td>5 Year 5 Months</td>
                                    <td><a class="m-l15 font-14" data-toggle="modal" data-target="#itskills" href="#"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td>html</td>
                                    <td>5</td>
                                    <td>2016</td>
                                    <td>2 Year 7 Months</td>
                                    <td><a class="m-l15 font-14" data-toggle="modal" data-target="#itskills" href="#"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td>css</td>
                                    <td>3</td>
                                    <td>2018</td>
                                    <td>0 Year 5 Months</td>
                                    <td><a class="m-l15 font-14" data-toggle="modal" data-target="#itskills" href="#"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td>photoshop</td>
                                    <td>64bit</td>
                                    <td>2017</td>
                                    <td>1 Year 0 Months</td>
                                    <td><a class="m-l15 font-14" data-toggle="modal" data-target="#itskills" href="#"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="itskills" tabindex="-1" role="dialog" aria-labelledby="ItskillsModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ItskillsModalLongTitle">IT Skills</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>IT Skills</label>
                                                            <input type="email" class="form-control" placeholder="Enter IT Skills">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Version</label>
                                                            <input type="email" class="form-control" placeholder="Enter Version">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Used</label>
                                                            <select>
                                                                <option>2018</option>
                                                                <option>2017</option>
                                                                <option>2016</option>
                                                                <option>2015</option>
                                                                <option>2014</option>
                                                                <option>2013</option>
                                                                <option>2012</option>
                                                                <option>2011</option>
                                                                <option>2010</option>
                                                                <option>2009</option>
                                                                <option>2008</option>
                                                                <option>2007</option>
                                                                <option>2006</option>
                                                                <option>2005</option>
                                                                <option>2004</option>
                                                                <option>2003</option>
                                                                <option>2002</option>
                                                                <option>2001</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Experience</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                        <div id="projects_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">Projects</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#projects" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <h6 class="font-14 m-b0">Job BoardEdit</h6>
                            <p class="m-b0">w3itexpert (Offsite)</p>
                            <p class="m-b0">Dec 2018 to Present (Full Time)</p>
                            <p class="m-b0">Job Board Template</p>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="projects" tabindex="-1" role="dialog" aria-labelledby="ProjectsModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ProjectsModalLongTitle">Add Projects</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Project Title</label>
                                                            <input type="email" class="form-control" placeholder="Enter Project Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Tag this project with your Employment/Education</label>
                                                            <select>
                                                                <option>Class 12th</option>
                                                                <option>Class 10th</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Client</label>
                                                            <input type="email" class="form-control" placeholder="Enter Client Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Project Status</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="inprogress" name="example1">
                                                                        <label class="custom-control-label" for="inprogress">In Progress</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="finished" name="example1">
                                                                        <label class="custom-control-label" for="finished">Finished</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Started Working From</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Worked Till</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Details of Project</label>
                                                            <textarea class="form-control" placeholder="Type Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                        <div id="profile_summary_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b15">Profile Summary</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#profilesummary" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <p class="m-b0">Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="profilesummary" tabindex="-1" role="dialog" aria-labelledby="ProfilesummaryModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ProfilesummaryModalLongTitle">Profile Summary</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Your Profile Summary should mention the highlights of your career and education, what your professional interests are, and what kind of a career you are looking for. Write a meaningful summary of more than 50 characters.</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Details of Project</label>
                                                            <textarea class="form-control" placeholder="Type Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                        </div>
                        <div id="accomplishments_bx" class="job-bx bg-white m-b30">
                            <h5 class="m-b10">Accomplishments</h5>
                            <div class="list-row">
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">Online Profile</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#accomplishments" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add link to Online profiles (e.g. Linkedin, Facebook etc.).</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="accomplishments" tabindex="-1" role="dialog"  aria-labelledby="AccomplishmentsModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="AccomplishmentsModalLongTitle">Online Profiles</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Social Profile</label>
                                                                    <input type="email" class="form-control" placeholder="Social Profile Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="email" class="form-control" placeholder="www.google.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">Work Sample</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#worksample" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add link to your Projects (e.g. Github links etc.).</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="worksample" tabindex="-1" role="dialog" aria-labelledby="WorksampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="WorksampleModalLongTitle">Work Sample</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Work Title</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="email" class="form-control" placeholder="www.google.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Duration From</label>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>january</option>
                                                                                <option>february</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>July</option>
                                                                                <option>August</option>
                                                                                <option>September</option>
                                                                                <option>October</option>
                                                                                <option>November</option>
                                                                                <option>December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Duration To</label>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>january</option>
                                                                                <option>february</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>July</option>
                                                                                <option>August</option>
                                                                                <option>September</option>
                                                                                <option>October</option>
                                                                                <option>November</option>
                                                                                <option>December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="check1" name="example1">
                                                                        <label class="custom-control-label" for="check1">I am currently working on this</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">White Paper / Research Publication / Journal Entry</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#journalentry" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add links to your Online publications.</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="journalentry" tabindex="-1" role="dialog" aria-labelledby="JournalentryModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="JournalentryModalLongTitle">White Paper / Research Publication / Journal Entry</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="email" class="form-control" placeholder="www.google.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Published On</label>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>january</option>
                                                                                <option>february</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>July</option>
                                                                                <option>August</option>
                                                                                <option>September</option>
                                                                                <option>October</option>
                                                                                <option>November</option>
                                                                                <option>December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">Presentation</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#presentation" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add links to your Online presentations (e.g. Slideshare presentation links etc.).</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="presentation" tabindex="-1" role="dialog" aria-labelledby="PresentationModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="PresentationModalLongTitle">Presentation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="email" class="form-control" placeholder="www.google.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">Patent</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#patent" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add details of Patents you have filed.</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="patent" tabindex="-1" role="dialog" aria-labelledby="PatentModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="PatentModalLongTitle">Patent</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="email" class="form-control" placeholder="www.google.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Patent Office</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Patent Office">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" id="check2" name="example1">
                                                                                <label class="custom-control-label" for="check2">Patent Issued</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" id="check3" name="example1">
                                                                                <label class="custom-control-label" for="check3">Patent pending</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Application Number</label>
                                                                    <input type="email" class="form-control" placeholder="Enter Application Number">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Published On</label>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>2018</option>
                                                                                <option>2017</option>
                                                                                <option>2016</option>
                                                                                <option>2015</option>
                                                                                <option>2014</option>
                                                                                <option>2013</option>
                                                                                <option>2012</option>
                                                                                <option>2011</option>
                                                                                <option>2010</option>
                                                                                <option>2009</option>
                                                                                <option>2008</option>
                                                                                <option>2007</option>
                                                                                <option>2006</option>
                                                                                <option>2005</option>
                                                                                <option>2004</option>
                                                                                <option>2003</option>
                                                                                <option>2002</option>
                                                                                <option>2001</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                            <select>
                                                                                <option>january</option>
                                                                                <option>february</option>
                                                                                <option>March</option>
                                                                                <option>April</option>
                                                                                <option>May</option>
                                                                                <option>Jun</option>
                                                                                <option>July</option>
                                                                                <option>August</option>
                                                                                <option>September</option>
                                                                                <option>October</option>
                                                                                <option>November</option>
                                                                                <option>December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" placeholder="Type Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                                <div class="list-line">
                                    <div class="d-flex">
                                        <h6 class="font-14 m-b5">Certification</h6>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#certification" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                                    </div>
                                    <p class="m-b0">Add details of Certification you have filed.</p>
                                    <!-- Modal -->
                                    <div class="modal fade modal-bx-info editor" id="certification" tabindex="-1" role="dialog" aria-labelledby="CertificationModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="CertificationModalLongTitle">Certification</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Certification Name</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Certification Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Certification Body</label>
                                                                    <input type="text" class="form-control" placeholder="Enter Certification Body">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Year Onlabel</label>
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="site-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal End -->
                                </div>
                            </div>
                        </div>
                        <div id="desired_career_profile_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b30">Desired Career Profile</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#desiredprofile" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="desiredprofile" tabindex="-1" role="dialog" aria-labelledby="DesiredprofileModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DesiredprofileModalLongTitle">Desired Career Profile </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Industry</label>
                                                            <select>
                                                                <option>Accounting / Finance</option>
                                                                <option>Banking / Financial Services / Broking</option>
                                                                <option>Education / Teaching / Training</option>
                                                                <option>IT-Hardware &amp; Networking</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Functional Area / Department</label>
                                                            <select>
                                                                <option>Agent</option>
                                                                <option>Architecture / Interior Design</option>
                                                                <option>Beauty / Fitness / Spa Services</option>
                                                                <option>IT Hardware / Technical Support</option>
                                                                <option>IT Software - System Programming</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <select>
                                                                <option>Creative</option>
                                                                <option>Web Designer</option>
                                                                <option>Graphic Designer</option>
                                                                <option>National Creative Director</option>
                                                                <option>Fresher</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Job Type</label>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="permanent" name="example1">
                                                                        <label class="custom-control-label" for="permanent">Permanent</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="contractual" name="example1">
                                                                        <label class="custom-control-label" for="contractual">Contractual</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Employment Type</label>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="fulltime" name="example1">
                                                                        <label class="custom-control-label" for="fulltime">Full Time</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="parttime" name="example1">
                                                                        <label class="custom-control-label" for="parttime">Part Time</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Preferred Shift</label>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="day" name="example1">
                                                                        <label class="custom-control-label" for="day">Day</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="night" name="example1">
                                                                        <label class="custom-control-label" for="night">Night</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="flexible" name="example1">
                                                                        <label class="custom-control-label" for="flexible">Part Time</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Availability to Join</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                        <option>2021</option>
                                                                        <option>2022</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Expected Salary</label>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="usdollars" name="example1">
                                                                        <label class="custom-control-label" for="usdollars">US Dollars</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="rupees" name="example1">
                                                                        <label class="custom-control-label" for="rupees">Indian Rupees</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option>0 lakh</option>
                                                                        <option>1 lakh</option>
                                                                        <option>2 lakh</option>
                                                                        <option>5 lakh</option>
                                                                        <option>4 lakh</option>
                                                                        <option>5 lakh</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                    <select>
                                                                        <option> 05 Thousand </option>
                                                                        <option> 10 Thousand </option>
                                                                        <option> 15 Thousand </option>
                                                                        <option> 20 Thousand </option>
                                                                        <option> 25 Thousand </option>
                                                                        <option> 30 Thousand </option>
                                                                        <option> 35 Thousand </option>
                                                                        <option> 40 Thousand </option>
                                                                        <option> 45 Thousand </option>
                                                                        <option> 50 Thousand </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Desired Location</label>
                                                            <select>
                                                                <option>India</option>
                                                                <option>Australia</option>
                                                                <option>Bahrain</option>
                                                                <option>China</option>
                                                                <option>Dubai</option>
                                                                <option>France</option>
                                                                <option>Germany</option>
                                                                <option>Hong Kong</option>
                                                                <option>Kuwait</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Desired Industry</label>
                                                            <select>
                                                                <option>Software</option>
                                                                <option>Factory</option>
                                                                <option>Ngo</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                            <!-- Details -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Industry</label>
                                        <span class="clearfix font-13">IT-Software/Software Services</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Role</label>
                                        <span class="clearfix font-13">Web Designer</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Employment Type</label>
                                        <span class="clearfix font-13">Full Time</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Availability to Join</label>
                                        <span class="clearfix font-13">12 july</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Desired Location</label>
                                        <span class="clearfix font-13">Add Desired Location</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Functional Area</label>
                                        <span class="clearfix font-13">Design / Creative / User Experience</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Job Type</label>
                                        <span class="clearfix font-13">permanent</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Desired Shift</label>
                                        <span class="clearfix font-13">Add Desired Shift</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Expected Salary</label>
                                        <span class="clearfix font-13">1 Lakhs</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Desired Industry</label>
                                        <span class="clearfix font-13">Add Desired Industry</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Details End -->
                        </div>
                        <div id="personal_details_bx" class="job-bx bg-white m-b30">
                            <div class="d-flex">
                                <h5 class="m-b30">Personal Details</h5>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#personaldetails" class="site-button add-btn button-sm"><i class="fa fa-pencil m-r5"></i> Edit</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade modal-bx-info editor" id="personaldetails" tabindex="-1" role="dialog" aria-labelledby="PersonaldetailsModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="PersonaldetailsModalLongTitle">Personal Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                    <select>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                        <option>31</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                    <select>
                                                                        <option>january</option>
                                                                        <option>february</option>
                                                                        <option>March</option>
                                                                        <option>April</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>July</option>
                                                                        <option>August</option>
                                                                        <option>September</option>
                                                                        <option>October</option>
                                                                        <option>November</option>
                                                                        <option>December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                                    <select>
                                                                        <option>2018</option>
                                                                        <option>2017</option>
                                                                        <option>2016</option>
                                                                        <option>2015</option>
                                                                        <option>2014</option>
                                                                        <option>2013</option>
                                                                        <option>2012</option>
                                                                        <option>2011</option>
                                                                        <option>2010</option>
                                                                        <option>2009</option>
                                                                        <option>2008</option>
                                                                        <option>2007</option>
                                                                        <option>2006</option>
                                                                        <option>2005</option>
                                                                        <option>2004</option>
                                                                        <option>2003</option>
                                                                        <option>2002</option>
                                                                        <option>2001</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="male" name="example1">
                                                                        <label class="custom-control-label" for="male">Male</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" id="female" name="example1">
                                                                        <label class="custom-control-label" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Permanent Address</label>
                                                            <input type="email" class="form-control" placeholder="Enter Your Permanent Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Hometown</label>
                                                            <input type="email" class="form-control" placeholder="Enter Hometown">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Pincode</label>
                                                            <input type="email" class="form-control" placeholder="Enter Pincode">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Marital Status</label>
                                                            <select>
                                                                <option>Married</option>
                                                                <option>Single / Unmarried</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Passport Number</label>
                                                            <input type="email" class="form-control" placeholder="Enter Passport Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>What assistance do you need</label>
                                                            <textarea class="form-control" placeholder="Type Description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Work Permit for Other Countries</label>
                                                            <select>
                                                                <option>India</option>
                                                                <option>Australia</option>
                                                                <option>Bahrain</option>
                                                                <option>China</option>
                                                                <option>Dubai</option>
                                                                <option>France</option>
                                                                <option>Germany</option>
                                                                <option>Hong Kong</option>
                                                                <option>Kuwait</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="site-button" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="site-button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End -->
                            <!-- Details -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Date of Birth</label>
                                        <span class="clearfix font-13">31 July 1998</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Gender</label>
                                        <span class="clearfix font-13">male</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Marital Status</label>
                                        <span class="clearfix font-13">Single / unmarried</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Passport Number</label>
                                        <span class="clearfix font-13">+ 123 456 7890</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Differently Abled</label>
                                        <span class="clearfix font-13">None</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Languages</label>
                                        <span class="clearfix font-13">English</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Permanent Address</label>
                                        <span class="clearfix font-13">Add Permanent Address</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Area Pin Code</label>
                                        <span class="clearfix font-13">302010</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Hometown</label>
                                        <span class="clearfix font-13">Delhi</span>
                                    </div>
                                    <div class="clearfix m-b20">
                                        <label class="m-b0">Work permit of other country</label>
                                        <span class="clearfix font-13">USA</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Details End -->
                        </div>
                        <div id="attach_resume_bx" class="job-bx bg-white m-b30">
                            <h5 class="m-b10">Attach Resume</h5>
                            <p>Resume is the most important document recruiters look for. Recruiters generally do not look at profiles without resumes.</p>
                            <form class="attach-resume">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <p class="m-auto align-self-center">
                                                    <i class="fa fa-upload"></i>
                                                    Upload Resume File size is 3 MB
                                                </p>
                                                <input type="file" class="site-button form-control" id="customFile">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">
                                If you do not have a resume document, you may write your brief professional profile <a class="site-button-link" href="javascript:void(0);">here</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Browse Jobs END -->
    </div>
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
                                <li><a href="javascript:void(0);" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0);" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="javascript:void(0);" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0);" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-a0">
                        <div class="lead-form browse-job text-left">
                            <form>
                                <h3 class="m-t0">Personal Details</h3>
                                <div class="form-group">
                                    <input type="text" value="" class="form-control" placeholder="E-Mail Address"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" value="" class="form-control" placeholder="Password"/>
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
