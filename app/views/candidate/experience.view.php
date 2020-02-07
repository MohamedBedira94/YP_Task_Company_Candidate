<style>
    .bootstrap-select.btn-group .dropdown-toggle .filter-option {
        color: #043da3;
        background-color: #cedbf185;
        padding: 10px;
        overflow: auto;
        border: 1px solid #39912f;
        font-size: 12px;
    }
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: hsla(0, 1%, 82%, 0.67);
    }
    .add{
        background-color: rgb(0, 85, 217);
        color: #ffffff;
        border: 1px solid #225de1;
        border-radius: 5px;
        }
    .modal-header{
        background-color: #ebe9e3;
        direction: rtl;
        color: #000000;
    }
    .close{
        font-size: 15px;
    }
    select{
        margin-bottom: 20px;
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
    .r-color{
        color: red;
    }
    .btn-group>.btn:first-child{
        margin-bottom: 10px;
        padding: 5px;
    }
    .r_style{
        margin-top: 50px;
        margin-bottom: 50px;
        border: 1px solid #57788469;
        padding: 30px;
    }


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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

                    <div class="col-lg-12 r_style">
                    <div class="clearfix" style="color:#000000;">
                        <h5>How many years of experience do you have?</h5>
                    </div>

                                <div class="form-group">
                                                <select name="users_experiece" id="users_experiece">
                                                    <option>&#160;</option>
                                                    <option value="0">No Experience</option>
                                                    <option value="1">Less than 1 year</option>
                                                    <option value="3">1 year</option>
                                                    <option value="4">2 year</option>
                                                    <option value="5">3 year</option>
                                                    <option value="4">4 year</option>
                                                    <option value="6">5 year</option>
                                                    <option value="7">6 year</option>
                                                    <option value="8">7 year</option>
                                                    <option value="9">8 year</option>
                                                    <option value="10">9 year</option>
                                                    <option value="11">10 year</option>
                                                    <option value="12">11 year</option>
                                                    <option value="13">12 year</option>
                                                    <option value="14">13 year</option>
                                                    <option value="15">14 year</option>
                                                    <option value="16">15 year</option>
                                                    <option value="17">More than 15 years</option>
                                                </select>

                                </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 r_style">
                            <div class="clearfix" style="color:#000000;display: -webkit-inline-box;">
                                <h6>Work experiences/Activities?</h6>—<span>Hint: Start with your current or most recent work experience</span>
                            </div>

                            <div class="container" style="width:700px;">  
                                       
                                        <div class="table-responsive">
            
                                            <div id="employee_table">
                                            <table class="table table-bordered">
                                            <!--
                                            <tr>
                                            <th width="70%">Employee Name</th>  
                                            <th width="30%">View</th>
                                            </tr>
                                            -->
                                            <?php
                                            /*
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                */
                                            ?>
                                        <!--
                                            <tr>
                                            <td><?php //echo $row["name"]; ?></td>
                                            <td><input type="button" name="view" value="view" id="<?php //echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                                            </tr>
                                            -->
                                            <?php
                                            //}
                                            ?>
                                            </table>
                                            </div>
                                        </div>
                                        <div align="left">
                                            <button  type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="add"><i class="fa fa-plus" aria-hidden="true"></i> Add Experience/Activity</button>
                                        </div>  
                           </div>
                </div>
                            

                           


                    <hr>

</div>
            </div>
        </div>
    </div>
</div>



<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #000000;">Add Experience / Activity</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Experience Type <span class="r-color">*</span></label>
                    <select name="exp_type" id="exp_type" class="form-control" >
                        <option>&#160;</option>
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Freelance / Project</option>
                        <option value="4">Internship</option>
                        <option value="5">Shift Based</option>
                        <option value="6">Work From Home</option>
                        <option value="7">Volunteering</option>
                        <option value="8">Student Activity</option>
                    </select>
                    <br />
                    <label>Job Title <span class="r-color">*</span></label>
                    <!--<textarea name="address" id="address" class="form-control"></textarea>-->
                    <input type="text" name="job_title" id="job_title" class="form-control" />
                    <br />
                    <label>Job Role *</label>
                    <select name="job_role" id="job_role" class="form-control">
                        <option>&#160;</option>
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
                    <br />
                    <label>Company/Organization Name <span class="r-color">*</span></label>
                    <input type="text" name="org_nm" id="org_nm" class="form-control" />
                    <br />
                    <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                        <label>From <span class="r-color">*</span></label>
                        <select name="mnth_1" id="mnth_1" class="form-control" >
                            <option>- Month -</option>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label>To <span class="r-color">*</span></label>
                        <select name="mnth_2" id="mnth_2" class="form-control" >
                            <option>- Month -</option>
                            <option value="January">January</option>
                            <option value="Febuary">Febuary</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <select name="yr_1" id="yr_1" class="form-control" >
                                    <option>- Year -</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select name="yr_2" id="yr_2" class="form-control" >
                                    <option>- Year -</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check" style="padding: 0px;">
                                <label>
                                    <input type="checkbox" name="hdshw_sal" id="hdshw_sal"> <span class="label-text"><span>I currently work there</span>
                                </label>
                            </div>

                        </div>

                    </div>


                    <label>Description <span class="r-color">*</span></label>
                    <textarea name="desc" id="desc" class="form-control" rows="5">

                    </textarea>

                    <br />
                    <label>Career Level <span class="r-color">*</span></label>
                    <select name="career_lvl" id="career_lvl" class="form-control">
                        <option>- Career Level -</option>
                        <option value="1">Student</option>
                        <option value="2">Entry Level</option>
                        <option value="3">Experienced - (Non-Manager)</option>
                        <option value="4">Manager</option>
                        <option value="5">Senior Management</option>
                    </select>
                    <br />

                    <label>Country <span class="r-color">*</span></label>
                    <select name="country" id="country" class="form-control">
                        <option>- Select Country -</option>
                        <?= \DEK\Models\EmpCountryModel::get_all_countries() ?>
                    </select>
                    <br />

                    <label>Company Size<span class="r-color">*</span></label>
                    <select name="country" id="country" class="form-control">
                        <option>- Company Size -</option>
                        <option value="1">1 - 10 Employees</option>
                        <option value="2">11 - 50 Employees</option>
                        <option value="3">51 - 100 Employees</option>
                        <option value="4">101 - 500 Employees</option>
                        <option value="5">501 - 1000 Employees</option>
                        <option value="6">More Than 1000 Employees</option>
                    </select>
                    <br />

                    <label>Company Industry<span class="r-color">*</span></label>
                    <select name="company_industry[]" id="company_industry" class="form-control" multiple="multiple">
                        <option></option>
                        <option value="1">Software Development</option>
                        <option value="2">Computer Science</option>
                        <option value="3">Animation</option>
                        <option value="4">Banking</option>
                        <option value="5">E-learning</option>
                        <option value="6">Education</option>
                        <option value="7">Consumer Services</option>
                    </select>
                    <br />

                    <label>Company Website<span class="r-color">*</span></label>
                    <input type="text" name="cmpny_website" id="cmpny_website" class="form-control" />
                    <br />

                    <label>Achievements <span class="r-color">*</span></label>
                    <textarea name="achvmnt" id="achvmnt" class="form-control" rows="5">

                    </textarea>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Starting Salary<span class="r-color">*</span></label>
                                <input name="strt_sal" id="strt_sal" class="form-control" >
                            </div>
                            <div class="col-lg-6">
                                <label>Ending Salary <span class="r-color">*</span></label>
                                <input name="end_sal" id="end_sal" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <br />
                    <label>Other Salary Info<span class="r-color">*</span></label>
                    <input type="text" name="sal_info" id="sal_info" class="form-control" />
                    <br />

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check" style="padding: 0px;">
                                <label>
                                    <input type="checkbox" name="hdshw_sal" id="hdshw_sal"> <span class="label-text"><span>Hide my salary from companies</span>
                                </label>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn add" />
                    </div>
                </form>
            </div>
           <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            -->
        </div>
    </div>
</div>

<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Employee Details</h4>
            </div>
            <div class="modal-body" id="employee_detail">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {


});
</script>








