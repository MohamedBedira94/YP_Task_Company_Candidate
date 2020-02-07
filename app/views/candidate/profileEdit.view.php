<!--

 `first_name`, `last_name`, `midle_name`, `user_id`, `birth_dt`, `gender`,
 `nationality_id`, `martial_stts`, `depends_num`, `militry_stts`, `driving_license`,
  `tag_lines`, `relocate_location`, `country_id`, `city_id`, `area_id`, `post_cd`,
  `phn_1`, `phn_2`, `minm_sal`, `hdshw_sal`, `career_lvl`, `job_type`, `srch_stts`,
   `recomend1`, `recomend2`, `profile_img`, `users_experiece`, `education_level`,
    `university_degree`, `cv_upld_url`, `cv_uploaded_stts`, `achievemnts`, `notes`
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
    $(function() {
        $('.dropdown li').click(function() {
            //Hide all other drop downs that are visible, and remove the class 'selected'
            $(this).siblings('.selected').removeClass('selected').find('ul:visible').slideUp('fast');

            //Show/Hide dropdowns
            $(this).toggleClass('selected');
            $('ul:first', this).stop(true, true).slideToggle('fast');
        });

        var birth_dy = '<?= $candidate->birth_dy ?>';
        var option = '';
        if (birth_dy == 1){option = "01";}else if(birth_dy == 2) {option = "02";} else if(birth_dy == 3) {option = "03";} else if(birth_dy == 4) {option = "04";} else if(birth_dy == 5) {option = "05";}
        else if(birth_dy == 6) {option = "06";} else if(birth_dy == 7) {option = "07";} else if(birth_dy == 8) {option = "08";} else if(birth_dy == 9) {option = "09";} else if(birth_dy == 10) {option = "10";}
        if (birth_dy == 11){option = "11";}else if(birth_dy == 12) {option = "12";} else if(birth_dy == 13) {option = "13";} else if(birth_dy == 14) {option = "14";} else if(birth_dy == 15) {option = "15";}
        else if(birth_dy == 16) {option = "16";} else if(birth_dy == 17) {option = "17";} else if(birth_dy == 18) {option = "18";} else if(birth_dy == 19) {option = "19";} else if(birth_dy == 20) {option = "20";}
        if (birth_dy == 21){option = "21";}else if(birth_dy == 22) {option = "22";} else if(birth_dy == 23) {option = "23";} else if(birth_dy == 24) {option = "24";} else if(birth_dy == 25) {option = "25";}
        else if(birth_dy == 26) {option = "26";} else if(birth_dy == 27) {option = "27";} else if(birth_dy == 28) {option = "28";} else if(birth_dy == 29) {option = "29";} else if(birth_dy == 30) {option = "30";}
        else if(birth_dy == 31) {option = "31";}else if(birth_dy == "") {option = "";}

        $('#birth_dy_2').val(option);

        $('#birth_dy_2').on('input',function() {
            var opt = $('option[value="'+$(this).val()+'"]');

            //alert(opt.length ? opt.attr('id') : 'NO OPTION');
            $v = opt.attr('id');
            // alert($v);
            $("#birth_dy").val ($v);
        });

        $('#nationality_id_2').on('input',function() {
            var opt = $('option[value="'+$(this).val()+'"]');

            //alert(opt.length ? opt.attr('id') : 'NO OPTION');
            $v = opt.attr('id');
            // alert($v);
            $("#nationality_id").val ($v);
        });

        $('#country_id').change(function(){
            var id = $('#country_id').val();
            $.ajax({
                type: "POST",
                url: '<?php echo SITE_URL."empaddress/get_stat_byCountryID"?>',
                data : {id:id},
                success: function (data) {
                    $("#city_id_2").val('');
                    $("#city_id_list").empty();
                    $("#area_id_2").val('');
                    $("#area_id_list").empty();
                    $('#city_id_list').html(data);
                    // console.log(data);
                }
            });
        });

        $('#city_id_2').on('input',function() {
            var opt = $('option[value="'+$(this).val()+'"]');

            //alert(opt.length ? opt.attr('id') : 'NO OPTION');
            $v = opt.attr('id');
            // alert($v);
            $("#city_id").val ($v);
            var id = $v;
            $.ajax({
                type: "POST",
                url: '<?php echo SITE_URL."empaddress/get_area_bycityID"?>',
                data : {id:id},
                success: function (data) {

                    $("#area_id_2").val('');
                    $("#area_id_list").empty();
                    $('#area_id_list').html(data);
                    // console.log(data);

                }
            });
        });


        $('#area_id_2').on('input',function() {
            var opt = $('option[value="' + $(this).val() + '"]');

            //alert(opt.length ? opt.attr('id') : 'NO OPTION');
            $v = opt.attr('id');
            // alert($v);
            $("#area_id").val($v);
        });

    });
</script>


<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(146)
                    .height(146)
                ;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


<style>
    .star-color{
        color: red;
    }

    .select2-choices {
          min-height: 200px !important;
          max-height: 200px !important;
          /*max-height: 300px;*/
          overflow-y: hidden;
          width: 200px;
          border-radius: 4px;
          height: 28px;
          overflow: hidden;
      }
    .js datalist {display: none;}
    .datalist {
        list-style: none;
        display: none;
        background: white;
        color: black;
        box-shadow: 0 2px 2px #999;
        position: absolute;
        left: 0;
        top: 0;
        max-height: 300px;
        overflow-y: auto;
    }
    .datalist:empty {
        display: none !important;
    }
    .datalist li {
        padding: 3px;
        font: 13px "Lucida Grande", Sans-Serif;
    }
    .datalist li.active {
        background: #3875d7;
        color: white;
    }

    .dropdown { padding:5px; overflow:hidden; }
    .dropdown > li { float:left; background:#efefef; border-right:#666 1px dotted; }
    .dropdown > li:hover { background:#eee; }
    .dropdown > li a { display:inline-block; padding:10px; }
    .dropdown > li.selected > a,
    .dropdown > li a:hover { background:#999; color:#fff; }
    .dropdown > li > ul { display:none; }
    .dropdown > li > ul a { padding:5px; }


    .bootstrap-select .dropdown-toggle {
        height: 50px;
    }
    .bootstrap-select.show.btn-group .dropdown-menu.inner {
        max-height: 50px;
    }
    .bootstrap-select .dropdown-menu > li > a {
        color: #000;
        font-size: 15px;
    }

    .btn-group>.btn:first-child{
        margin-bottom: 10px;
        padding: 5px;
    }


</style>

<div class="section-full bg-white browse-job p-t50 p-b20">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 m-b30">
                <div class="sticky-top">
                    <div class="candidate-info">

                        <?php include_once ('inc.sidbarMnu_cand.php');?>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 m-b30">
                <?php if (isset($_SESSION['message']) && $_SESSION['message'] == 1) {
                    //var_dump($candidate);
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-success" role="alert" style="margin: 5px auto;margin-right: 50px;">
                                Your Data Saved Successfully
                            </div>
                        </div>
                    </div>
                <?php
                }else if (isset($_SESSION['message']) && $_SESSION['message'] == 2){

                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-danger" role="alert" style="margin: 5px auto;margin-right: 50px;">
                                Error in Your Data , please Check again
                            </div>
                        </div>
                    </div>
                    <?php
                }else{

                }
                unset($_SESSION['message']);
                //$_SESSION['message']="";
                ?>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-lg-12">
                        <div class="col-lg-3" style="float: left">
                            <div class="canditate-des">

                                <a href="javascript:void(0);">
                                    <img alt="your photo" id="blah" name="blah" src="<?= SITE_URL?>emp_profiles/<?php echo $candidate->profile_img ;?>" style="border-radius: 50%;">
                                </a>
                                <div class="upload-link" title="update" data-toggle="tooltip" data-placement="right" style="padding: 0px 14px;z-index: 1000;">
                                    <input type="file" name="profile_img" id="profile_img" class="update-flie" onchange="readURL(this);">
                                    <i class="fa fa-camera"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-9 profile-photo">
                            <p>Profile Photo</p>
                            <span>You can upload a .jpg, .png, or .gif photo with max size of 5MB.</span>
                        </div>

                    </div>

                    <div class="job-bx job-profile profile-background" style="background-color: #e1e7ff;">


                        <div class="job-bx-title clearfix">
                            <h5 class="font-weight-700 pull-left text-uppercase">Your Personal Info</h5>
                            <!-- <a href="index.html" class="site-button right-arrow button-sm float-right">Back</a> -->
                        </div>

                        <div class="row m-b30">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="star-color">*</span></label>
                                    <input name="first_name" id="first_name" value="<?php echo !empty($candidate->first_name)?$candidate->first_name:'' ?>" type="text" class="form-control" placeholder="First Name here ...." required="required">
                                    <input type="hidden" name="id" id="id" value="<?= base64_encode(base64_encode($candidate->id)) ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Middle Name <span class="star-color">*</span></label>
                                    <input name="midle_name" id="midle_name" value="<?php echo !empty($candidate->midle_name)?$candidate->midle_name:'' ?>" type="text" class="form-control" placeholder="Middle Name here ...." required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="star-color">*</span></label>
                                    <input name="last_name" id="last_name" type="text" value="<?php echo !empty($candidate->last_name)?$candidate->last_name:'' ?>" class="form-control" placeholder="Last Name here ...." required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Birth date <span class="star-color">*</span></label>
                                    <div class="col-lg-12 col-md-12 row select-padding">
                                        <div class="col-lg-3 col-md-3">

                                            <input id='birth_dy' name="birth_dy" type="hidden" class="form-control" value="<?= $candidate->birth_dy ?>" style="border: 1px solid #00785f;">
                                            <input id='birth_dy_2' name="birth_dy_2" list="birth_dy_list" class="form-control" style="border: 1px solid #00785f">
                                            <datalist id="birth_dy_list" class="datalist">
                                                <option id="1" value="01" />
                                                <option id="2" value="02" />
                                                <option id="3" value="03" />
                                                <option id="4" value="04" />
                                                <option id="5" value="05" />
                                                <option id="6" value="06" />
                                                <option id="7" value="07" />
                                                <option id="8" value="08" />
                                                <option id="9" value="09" />
                                                <option id="10" value="10" />
                                                <option id="11" value="11" />
                                                <option id="12" value="12" />
                                                <option id="13" value="13" />
                                                <option id="14" value="14" />
                                                <option id="15" value="15" />
                                                <option id="16" value="16" />
                                                <option id="17" value="17" />
                                                <option id="18" value="18" />
                                                <option id="19" value="19" />
                                                <option id="20" value="20" />
                                                <option id="21" value="21" />
                                                <option id="22" value="22" />
                                                <option id="23" value="23" />
                                                <option id="24" value="24" />
                                                <option id="25" value="25" />
                                                <option id="26" value="26" />
                                                <option id="27" value="27" />
                                                <option id="28" value="28" />
                                                <option id="29" value="29" />
                                                <option id="30" value="30" />
                                                <option id="31" value="31" />
                                            </datalist>

                                        </div>
                                        <div class="col-lg-3 col-md-3">

                                            <select name="birth_mnth" id="birth_mnth" required="required">
                                               <?= \DEK\Models\CandidateModel::get_birth_mnth($candidate->birth_mnth); ?>
                                            </select>

                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <select name="birth_yr" id="birth_yr" class="form-control" required="required">
                                                <?= \DEK\Models\CandidateModel::get_birth_yr($candidate->birth_yr); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label>Gender <span class="star-color">*</span></label>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 row">
                                        <?php if($candidate->gender == '1'){ ?>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="radio1">
                                                <input type="radio" class="form-check-input" id="gender" name="gender" value="1" checked>Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                                <label class="form-check-label" for="radio2">
                                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="2">Female
                                                </label>
                                        </div>

                                        <?php }else if($candidate->gender == '2'){?>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio1">
                                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="1">Male
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio2">
                                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="2" checked>Female
                                                </label>
                                            </div>
                                        <?php }else{
                                            ?>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio1">
                                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="1">Male
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio2">
                                                    <input type="radio" class="form-check-input" id="gender" name="gender" value="2">Female
                                                </label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Nationality <span class="star-color">*</span></label>
                                    <div class="col-lg-4 col-md-4 select-padding">

                                        <input id='nationality_id' name="nationality_id" type="hidden" class="form-control" value="<?php echo !empty($candidate->nationality_id)?$candidate->nationality_id:'' ?>" style="border: 1px solid #00785f;">
                                        <input id='nationality_id_2' name="nationality_id_2" list="nationality_id_list" value="<?php echo !empty($candidate->nationality_id)?\DEK\Models\NationalityModel::get_nationality($candidate->nationality_id) :'' ?>" class="form-control" style="border: 1px solid #00785f">
                                        <datalist id="nationality_id_list" class="datalist">
                                            <?=\DEK\Models\NationalityModel::get_all_nationalties(); ?>
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Marital Status <span class="star-color">*</span></label>
                                    <div class="form-group">
                                        <div class="col-lg-12 col-md-12 row">
                                            <?php if($candidate->martial_stts == '1'){ ?>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="martial_stts">
                                                    <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="1" checked >Unspecified
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="gender">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="2">Single
                                                    </label>
                                            </div>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="radio2">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="3">Married
                                                    </label>
                                            </div>

                                            <?php }else if($candidate->martial_stts == '2'){?>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="martial_stts">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="1">Unspecified
                                                    </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="gender">
                                                    <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="2" checked>Single
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="radio2">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="3">Married
                                                    </label>
                                            </div>

                                            <?php }else if($candidate->martial_stts == '3'){?>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="martial_stts">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="1">Unspecified
                                                    </label>
                                            </div>
                                            <div class="form-check-inline">
                                                    <label class="form-check-label" for="gender">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="2">Single
                                                    </label>
                                             </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="radio2">
                                                    <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="3" checked>Married
                                                </label>
                                            </div>
                                            <?php}else{?>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="martial_stts">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="1">Unspecified
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="gender">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="2">Single
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="radio2">
                                                        <input type="radio" class="form-check-input" id="martial_stts" name="martial_stts" value="3">Married
                                                    </label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Number of Dependents <span class="star-color">*</span></label>
                                    <div class="col-lg-6 col-md-6 select-padding">
                                        <select name="depends_num" id="depends_num" class="form-control" required="required">
                                            <?= \DEK\Models\CandidateModel::get_depends_num($candidate->depends_num)?>
                                            <!--<option value="1900">1900</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Military Status <span class="star-color">*</span></label>
                                    <div class="col-lg-6 col-md-6 select-padding">
                                        <select name="militry_stts" id="militry_stts" class="form-control" required="required">
                                            <?= \DEK\Models\CandidateModel::get_militry_stts($candidate->militry_stts) ?>
                                            <!--<option value="1900">1900</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label>Do you have a driving license?</label>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 row">
                                        <?php if($candidate->driving_license == '1'){ ?>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="driving_license">
                                                <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="1" checked >Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                                <label class="form-check-label" for="driving_license">
                                                    <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="2">No
                                                </label>
                                        </div>
                                        <?php }else if($candidate->driving_license == '2'){ ?>
                                         <div class="form-check-inline">
                                                <label class="form-check-label" for="driving_license">
                                                    <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="1" >Yes
                                                </label>
                                         </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="driving_license">
                                                <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="2" checked>No
                                            </label>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="driving_license">
                                                    <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="1" >Yes
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="driving_license">
                                                    <input type="radio" class="form-check-input" id="driving_license" name="driving_license" value="2">No
                                                </label>
                                            </div>
                                        <?php
                                        } ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Tag Line <span class="star-color">*</span></label>
                                    <div class="col-lg-10 col-md-10 select-padding">
                                        <input name="tag_lines" id="tag_lines" type="text" value="<?php echo !empty($candidate->tag_lines)?$candidate->tag_lines:'' ?>" class="form-control" placeholder="Tag Lines here ....">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</textarea>
                                </div>
                            </div>
                            -->
                        </div>
                        <hr>
                        <div class="job-bx-title clearfix">
                            <h5 class="font-weight-700 pull-left text-uppercase">Your Location</h5>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Country <span class="star-color">*</span></label>
                                <select name="country_id" id="country_id" class="form-control" required="required">
                                    <option>&#160;</option>
                                    <?= \DEK\Models\EmpCountryModel::get_country_byID($candidate->country_id) ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>City <span class="star-color">*</span></label>

                                <input id='city_id' name="city_id" class="form-control" type="hidden" value="<?= $candidate->city_id?>">
                                <input id='city_id_2' name="city_id_2" list="city_id_list" value="<?php echo !empty($candidate->city_id)?\DEK\Models\EmpStateModel::get_state_BYID($candidate->city_id) :'' ?>" class="form-control" style="border: 1px solid #00785f">
                                <datalist id="city_id_list" class="datalist">

                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Area:</label>

                                <input id='area_id' name="area_id" class="form-control" type="hidden" value="<?= $candidate->area_id?>">
                                <input id='area_id_2' name="area_id_2" list="area_id_list" value="<?php echo !empty($candidate->area_id)?\DEK\Models\EmpCityModel::get_area_BYID($candidate->area_id) :'' ?>" class="form-control" style="border: 1px solid #00785f">
                                <datalist id="area_id_list" class="datalist">

                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Post Code:</label>
                                <input type="text" name="post_cd" id="post_cd" value="<?php echo !empty($candidate->post_cd)?$candidate->post_cd:'' ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label>Would you be willing to relocate to another city or country if you find the right opportunity?</label>
                            <div class="form-group">
                                <div class="col-lg-12 col-md-12 row">
                                    <?php if($candidate->relocate_location == '1'){?>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="relocate_location">
                                            <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="1" checked>Yes
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                            <label class="form-check-label" for="relocate_location">
                                                <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="2">No
                                            </label>
                                    </div>

                                    <?php }else if($candidate->relocate_location == '2'){?>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="relocate_location">
                                                <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="1">Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="relocate_location">
                                                <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="2" checked>No
                                            </label>
                                        </div>

                                    <?php }else{ ?>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="relocate_location">
                                                <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="1" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="relocate_location">
                                                <input type="radio" class="form-check-input" id="relocate_location" name="relocate_location" value="2">No
                                            </label>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="job-bx-title clearfix">
                            <h5>Your Contact Info <span style="font-size: 15px;font-family: Tahoma;">— Hint: Companies will be contacting you on this number</span></h5>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Mobile Number <span class="star-color">*</span></label>
                                <input type="text" name="phn_1" id="phn_1" value="<?php echo !empty($candidate->phn_1)?$candidate->phn_1:'' ?>" class="form-control" placeholder="+1 123 456 7890" required="required">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Alternative Number <span class="star-color">*</span></label>
                                <input type="text" name="phn_2" id="phn_2" value="<?php echo !empty($candidate->phn_2)?$candidate->phn_2:'' ?>" class="form-control" placeholder="+1 123 456 7890" required="required">
                            </div>
                        </div>
                        <!--
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="text" class="form-control" placeholder="info@example.com">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Postcode:</label>
                                <input type="text" class="form-control" placeholder="112233">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>City:</label>
                                <input type="text" class="form-control" placeholder="London">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Full Address:</label>
                                <input type="text" class="form-control" placeholder="New york City">
                            </div>
                        </div>
                        -->

                        <button class="site-button m-b30" name="update" id="update" value="update">Edit Setting</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Browse Jobs END -->
