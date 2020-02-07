<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />

<style>
    .bootstrap-select.btn-group .dropdown-toggle .filter-option {
        color: #043da3;
        background-color: #cedbf185;
        padding: 10px;
        overflow: auto;
        border: 1px solid #39912f;
        font-size: 12px;
    }

    .ms-options-wrap > .ms-options > ul label {
        position: relative;
        display: inline-block;
        width: 100%;
        padding: 4px;
        margin: 1px 0;
        background-color: #9DCEFF;

    }

    .ms-options-wrap > .ms-options > ul li.selected label,
    .ms-options-wrap > .ms-options > ul label:hover {
        background-color: #003A75;
        color:#fff;
    }

    /*@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");*/

    label{
        position: relative;
        cursor: pointer;
        color: #666;
        font-size: 13px;
    }

    input[type="checkbox"], input[type="radio"]{
        position: absolute;
        right: 9000px;
    }

    /*Check box*/
    input[type="checkbox"] + .label-text:before{
        content: "\f096";
        font-family: "FontAwesome";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="checkbox"]:checked + .label-text:before{
        content: "\f14a";
        color: #2980b9;
        animation: effect 250ms ease-in;
    }

    input[type="checkbox"]:disabled + .label-text{
        color: #aaa;
    }

    input[type="checkbox"]:disabled + .label-text:before{
        content: "\f0c8";
        color: #ccc;
    }

    /*
    @import('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css')
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    */
    /*Radio box*/

    input[type="radio"] + .label-text:before{
        content: "\f192";
        font-family: "Font Awesome 5 Free";
        speak: none;
        font-style: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="radio"]:checked + .label-text:before{
        content: "\f192";
        color: #8e44ad;
        animation: effect 250ms ease-in;
    }

    input[type="radio"]:disabled + .label-text{
        color: #aaa;
    }

    input[type="radio"]:disabled + .label-text:before{
        content: "\f192";
        color: #ccc;
    }

    /*Radio Toggle*/

    .toggle input[type="radio"] + .label-text:before{
        content: "\f204";
        font-family: "Font Awesome 5 Free";
        speak: none;
        font-style: normal;
        font-weight: 900;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing:antialiased;
        width: 1em;
        display: inline-block;
        margin-right: 10px;
        font-size: 25px;
    }

    .toggle input[type="radio"]:checked + .label-text:before{
        content: "\f205";
        color: #16a085;
        animation: effect 250ms ease-in;
        font-size: 25px;
    }

    .toggle input[type="radio"]:disabled + .label-text{
        color: #aaa;
    }

    .toggle input[type="radio"]:disabled + .label-text:before{
        content: "\f204";
        color: #ccc;
    }
    @keyframes effect{
        0%{transform: scale(0);}
        25%{transform: scale(1.3);}
        75%{transform: scale(1.4);}
        100%{transform: scale(1);}
    }

    .select2-selection__choice__remove {
        display: none !important;
    }
    .select2-choices {
        min-height: 100px !important;
        max-height: 100px !important;
        max-height: 300px;
        /*overflow-y: hidden;*/
    }

.element{
    margin: 10px;
}
.add{
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    font-size: 20px;
    font-family: Tahoma;
    border-radius: 5px;
    padding: 5px;
}
input[type="text"]{
    border-radius: 5px;
    border: 1px solid #28a745eb;
    padding: 3px;
    margin: 5px;
}
.fa-trash{
    color: darkred;
}
.m-b30{
    margin: 0px;
}


    .switchToggle input[type=checkbox]{height: 0; width: 0; visibility: hidden; position: absolute; }
    .switchToggle label {cursor: pointer; text-indent: -9999px; width: 50px; max-width: 70px; height: 30px; background: #d1d1d1; display: block; border-radius: 100px; position: relative; }
    .switchToggle label:after {content: ''; position: absolute; top: 2px; left: 2px; width: 26px; height: 26px; background: #fff; border-radius: 90px; transition: 0.3s; }
    .switchToggle input:checked + label, .switchToggle input:checked + input + label  {background: #16a085; }
    .switchToggle input + label:before, .switchToggle input + input + label:before {content: ''; position: absolute; top: 5px; left: 35px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
    .switchToggle input:checked + label:before, .switchToggle input:checked + input + label:before {content: ''; position: absolute; top: 5px; left: 10px; width: 26px; height: 26px; border-radius: 90px; transition: 0.3s; text-indent: 0; color: #fff; }
    .switchToggle input:checked + label:after, .switchToggle input:checked + input + label:after {left: calc(100% - 2px); transform: translateX(-100%); }
    .switchToggle label:active:after {width: 60px; }
    .toggle-switchArea { margin: 10px 0 10px 0; }
    .switchToggle{
        margin:10px;
    }

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

<div class="section-full bg-white browse-job p-t50 p-b20" style="color: #000000;">
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
                <div class="job-bx job-profile profile-background" style="background-color: #e1e7ff;">


                    <div class="clearfix" style="color:#000000;">
                        <h5>What is the minimum salary you would accept?— <span style="font-size: 15px;font-family: Tahoma;">Add a net salary (i.e., final amount you want after taxes and insurance)</span></h5>
                        <!-- <a href="index.html" class="site-button right-arrow button-sm float-right">Back</a> -->
                    </div>

                    <div class="row m-b30">
                        <div class="col-lg-12 col-md-12">
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <input name="minm_sal" id="minm_sal" type="number" class="form-control">
                            </div>
                        </div>
                            <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input name="hdshw_sal" id="hdshw_sal" type="checkbox">
                                <div class="form-check" style="padding: 0px;">
                                    <label>
                                        <input type="checkbox" name="hdshw_sal" id="hdshw_sal"> <span class="label-text"><span>Hide my minimum salary from companies.</span>
                                        <p>We'll only use your minimum salary to recommend jobs for you.</p></span>
                                    </label>
                                </div>

                            </div>

                            </div>

                        </div>


                    </div>
                    <hr>

                    <div class="clearfix" style="color:#000000;">
                        <h5>What is your current career level?</h5>
                    </div>

                    <div class="row m-b30">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-lg-12 col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 row">
                                            <div class="col-lg-4 col-md-4">
                                            <div class="form-check">
                                                <label>
                                                    <input type="radio" name="radio" checked> <span class="label-text">Student</span>
                                                </label>
                                            </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                            <div class="form-check">
                                                <label>
                                                    <input type="radio" name="radio"> <span class="label-text">Entry Level</span>
                                                </label>
                                            </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                            <div class="form-check">
                                                <label>
                                                    <input type="radio" name="radio"> <span class="label-text">Experienced <br> (Non-Manager)</span>
                                                </label>
                                            </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                            <div class="form-check">
                                                <label>
                                                    <input type="radio" name="radio"> <span class="label-text">Manager</span>
                                                </label>
                                            </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                            <div class="form-check">
                                                <label>
                                                    <input type="radio" name="radio" checked> <span class="label-text"><span>Senior Management <br> (e.g. VP, CEO)</span>
                                                </label>
                                            </div>
                                            </div>


                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                    </div>

                    <hr>
                    <div class="clearfix" style="color:#000000;">
                        <h5>What type(s) of job are you open to?</h5>
                    </div>
                    <div class="row m-b30">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-lg-12 col-md-12">
                                <div class="container">
                                    <div>
                                        <div class="col-lg-12 col-md-12 row">
                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Full Time</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check"> <span class="label-text">Part Time</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check"> <span class="label-text">Freelance / Project</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Internship</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Shift Based</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Work From Home</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Volunteering</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                    <div class="form-check">
                                                        <label>
                                                            <input type="checkbox" name="check" checked> <span class="label-text">Student Activity</span>
                                                        </label>
                                                    </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>

                    <hr>

                    <div class="clearfix" style="color:#000000;">
                        <h5>What job roles are you interested in?— Add 1 or more</h5>
                    </div>
                    <div class="container">
                        <div>
                            <select name="multicheckbox[]" multiple="multiple" class="4col formcls select2-choices ">
                                <option value="1">IT / Software Development</option>
                                <option value="2">Administration</option>
                                <option value="3">Project/Program Management</option>
                                <option value="4">C-Level Executive/GM/Director</option>
                                <option value="5">Business Development</option>
                                <option value="6">Engineering - Telecom/Technology</option>
                                <option value="7">Analyst/Research</option>
                                <option value="8">Human Resources</option>
                                <option value="9">Accounting / Finance</option>
                                <option value="10">Banking</option>
                                <option value="11">Creative / Design /Art</option>
                                <option value="12">Customer Service / Support</option>
                                <option value="13">Education / Teaching</option>
                                <option value="14">Engineering-construction/civil/architecture</option>
                                <option value="15">Engineering-Mechanical/Electrical</option>
                                <option value="16">Engineering-oil&gas/Energy</option>
                                <option value="17">Engineering-other</option>
                                <option value="18">Fashion</option>
                                <option value="19">Hospitality/Hotels/Food Services</option>
                                <option value="20">Installation/Maintenance/Repair</option>
                                <option value="21">legal</option>
                                <option value="22">Logistics/Supply Chain</option>
                                <option value="23">Manufacturing/Production</option>
                                <option value="24">Marketing/PR/Advertising</option>
                                <option value="25">Media/Journalism/Publishing</option>
                                <option value="26">Medical/Healthcare</option>
                                <option value="27">Operations / Management</option>
                                <option value="28">Other</option>
                                <option value="29">Pharmaceutical</option>
                                <option value="30">Purchasing/Procurement</option>
                                <option value="31">Quality</option>
                                <option value="32">R&D / Science</option>
                                <option value="33">Sales / Retail</option>
                                <option value="34">Sports and leisure</option>
                                <option value="35">Strategy / Consulting</option>
                                <option value="36">Toursim / Travel</option>
                                <option value="37">Training / Instructor</option>
                                <option value="38">Writing / Editoral</option>
                            </select>


                        </div>
                    </div>

                    <hr>

                    <div class="clearfix" style="color:#000000;">
                        <h6 style="display: inline;">What are the keywords and job titles that describe what you are looking for?</h6>— <span>Add at least 2</span>
                    </div>
                    <div style="margin-top: 10px;">
                        <span class='add'><i class="fa fa-plus-circle" aria-hidden="true">Add</i></span>&nbsp;
                    </div>
                    <div class="container" style="display: inline-flex;">

                        <div class="row" style="padding: 5px;">

                        <div class='element' id='div_1'>
                            <input type='text' placeholder='Ex: Job Title' id='txt_1' ><span id='remove_1' class='remove'><i class="fa fa-trash" aria-hidden="true"></i></span>
                        </div>
                        </div>
                    </div>

                    <hr>

                    <div class="clearfix" style="color:#000000;">
                        <h6 style="display: inline;">Where would you like to work?</h6>— <span>You can add up to 5 countries or cities</span>
                    </div>

                    <div class="container">
                        <div>
                            <select name="multicheckbox[]" multiple="multiple" class="4col formcls select2-choices ">
                                <option>&#160;</option>
                                <?= \DEK\Models\EmpCountryModel::get_all_countries() ?>
                            </select>


                        </div>
                    </div>

                    <hr>

                    <div class="clearfix" style="color:#000000;">
                        <h6 style="display: inline;">What is your current job search status?</h6>
                    </div>

                    <div class="container">
                        <div class="row">
                        <div class="col-lg-12">
                         <select name="srch_stts" id="srch_stts">
                             <option>&#160;</option>
                             <option value="1">I am unemployed and desperate for a job</option>
                             <option value="2">I am actively looking for new opportunities and jobs</option>
                             <option value="3">I am happy where I am but don't mind finding good opportunities</option>
                             <option value="4">I am only interested in very specific opportunities</option>
                             <option value="5">I am not looking for a job</option>
                         </select>
                        </div>

                         <div>
                             <div style="display: inline-flex;">

                             <div class="switchToggle">
                                 <input type="checkbox" name="recomend1" id="switch1" checked>
                                 <label for="switch1"></label>
                             </div>
                             <span style="margin: 10px;">Let companies find me on WUZZUF. (Recommended) <br><span style="font-size: 12px;"> By activating this option, you will increase your chances of getting headhunted by companies searching our database.</span></span>

                            </div>

                             <div style="display: inline-flex;">

                                 <div class="switchToggle">
                                     <input type="checkbox" name="recomend2" id="switch2" checked>
                                     <label for="switch2"></label>
                                 </div>
                                 <span style="margin: 10px;">Make my profile public. (Recommended)<br><span style="font-size: 12px;"> By activating this option, you can share your profile to those not on WUZZUF and get more exposure.</span></span>

                             </div>

                         </div>
                        </div>

                    </div>





                </div>
                <button class="site-button m-b30" name="save" id="save" style="margin-top: 15px;">Save Changes</button>
        </div>


    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/multiselect-checkbox/jquery.multiselect.js"></script>
<script>

    $(document).ready(function() {
        /*
        $('select[multiple]').multiselect({
            columns: 4,
            placeholder: 'Select options'
        });
        */

    });
    $(document).ready(function(){

        // Add new element
        $(".add").click(function(){

            // Finding total number of elements added
            var total_element = $(".element").length;

            // last <div> with element class id
            var lastid = $(".element:last").attr("id");
            var split_id = lastid.split("_");
            var nextindex = Number(split_id[1]) + 1;

            var max = 5;
            // Check total number elements
            if(total_element < max ){
                // Adding new div container after last occurance of element class
                $(".element:last").after("<div class='element' id='div_"+ nextindex +"'></div>");

                // Adding element to <div>
                $("#div_" + nextindex).append("<input type='text' placeholder='Ex: Job Title' id='txt_"+ nextindex +"'>&nbsp;<span id='remove_" + nextindex + "' class='remove'><i class='fa fa-trash' aria-hidden='true'></i></span>");

            }

        });

        // Remove element
        $('.container').on('click','.remove',function(){

            var id = this.id;
            var split_id = id.split("_");
            var deleteindex = split_id[1];

            // Remove <div> with id
            $("#div_" + deleteindex).remove();

        });
    });
</script>







