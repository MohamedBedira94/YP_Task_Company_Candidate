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
                        <h5>What's your current educational level? -<span style="font-size: 15px;font-family: Tahoma;">If you are currently studying, select your expected degree.</span></h5>
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
                                                        <input type="radio" name="radio" checked> <span class="label-text">Bachelor's Degree</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-check">
                                                    <label>
                                                        <input type="radio" name="radio"> <span class="label-text">Master's Degree</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-check">
                                                    <label>
                                                        <input type="radio" name="radio"> <span class="label-text">Doctorate Degree</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-check">
                                                    <label>
                                                        <input type="radio" name="radio"> <span class="label-text">High School</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-check">
                                                    <label>
                                                        <input type="radio" name="radio" checked> <span class="label-text"><span>Vocational</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-check">
                                                    <label>
                                                        <input type="radio" name="radio" checked> <span class="label-text"><span>Diploma</span>
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                     </div>


                    <div class="col-lg-12 r_style">
                    <div class="clearfix" style="color:#000000;">
                        <h5>University Degrees</h5>
                    </div>

                    <div class="container" style="width:700px;">
                        <div class="row">

                            <div align="left">
                                <button  type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="add"><i class="fa fa-plus" aria-hidden="true"></i> Add Degree</button>
                            </div>

                        </div>
                    </div>
                    </div>

                    <hr>
                    <div class="col-lg-12 r_style">
                    <div class="clearfix" style="color:#000000;">
                        <h5>High School</h5>
                    </div>

                    <div class="container" style="width:700px;">
                        <div class="row">

                            <div align="left">
                                <button  type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal_2" class="add"><i class="fa fa-plus" aria-hidden="true"></i> Add High School</button>
                            </div>

                        </div>
                    </div>

                    </div>

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
                <h4 class="modal-title" style="color: #000000;">Add Degree</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Degree Level <span class="r-color">*</span></label>
                    <select name="exp_type" id="exp_type" class="form-control" >
                        <option>- Select Degree level -</option>
                        <option value="1">Bachelor's Degree</option>
                        <option value="2">Master's Degree</option>
                        <option value="3">MBA</option>
                        <option value="4">Doctorate Degree</option>
                        <option value="5">Vocational</option>
                        <option value="6">Technical Diploma</option>
                    </select>

                    <br/>
                    <label>Country <span class="r-color">*</span></label>
                    <select name="country" id="country" class="form-control">
                        <option>- Select Country -</option>
                        <?= \DEK\Models\EmpCountryModel::get_all_countries() ?>
                    </select>

                    <br />
                    <label>University/Institution <span class="r-color">*</span></label>
                    <!--<textarea name="address" id="address" class="form-control"></textarea>-->
                    <input type="text" name="job_title" id="job_title" class="form-control" placeholder="e.g., Ain Shams University"/>
                    <br />
                    <label>Field(s) of Study <span class="r-color">*</span></label>
                    <input type="text" name="org_nm" id="org_nm" class="form-control" placeholder="e.g., Finance, Political Science, ..." />
                    <br />

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Start Year <span class="r-color">*</span></label>
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
                                <label>End Year<span class="r-color">*</span></label>
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
                    <label>Grade <span class="r-color">*</span></label>
                    <select name="career_lvl" id="career_lvl" class="form-control">
                        <option>- Grade -</option>
                        <option value="1">A / Excellent / 85-100%</option>
                        <option value="2">B / Very Good / 75-85%</option>
                        <option value="3">C / Good / 65-75%</option>
                        <option value="4">D / Fair / 50-65%</option>
                     </select>
                     <br />


                    <label>Studied Subjects <span class="r-color">*</span></label>
                    <textarea name="desc" id="desc" class="form-control" rows="5">

                    </textarea>

                    <br />

                    <label>Additional Info — Optional <span class="r-color">*</span></label>
                    <textarea name="achvmnt" id="achvmnt" class="form-control" rows="5">

                    </textarea>
                    <br />
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


<div id="add_data_Modal_2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #000000;">Add High School</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Degree Level <span class="r-color">*</span></label>
                    <select name="exp_type" id="exp_type" class="form-control" >
                        <option>- Select Degree level -</option>
                        <option value="1">Bachelor's Degree</option>
                        <option value="2">Master's Degree</option>
                        <option value="3">MBA</option>
                        <option value="4">Doctorate Degree</option>
                        <option value="5">Vocational</option>
                        <option value="6">Technical Diploma</option>
                    </select>

                    <br/>
                    <label>Country <span class="r-color">*</span></label>
                    <select name="country" id="country" class="form-control">
                        <option>- Select Country -</option>
                        <?= \DEK\Models\EmpCountryModel::get_all_countries() ?>
                    </select>

                    <br />
                    <label>University/Institution <span class="r-color">*</span></label>
                    <!--<textarea name="address" id="address" class="form-control"></textarea>-->
                    <input type="text" name="job_title" id="job_title" class="form-control" placeholder="e.g., Ain Shams University"/>
                    <br />
                    <label>Field(s) of Study <span class="r-color">*</span></label>
                    <input type="text" name="org_nm" id="org_nm" class="form-control" placeholder="e.g., Finance, Political Science, ..." />
                    <br />

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Start Year <span class="r-color">*</span></label>
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
                                <label>End Year<span class="r-color">*</span></label>
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
                    <label>Grade <span class="r-color">*</span></label>
                    <select name="career_lvl" id="career_lvl" class="form-control">
                        <option>- Grade -</option>
                        <option value="1">A / Excellent / 85-100%</option>
                        <option value="2">B / Very Good / 75-85%</option>
                        <option value="3">C / Good / 65-75%</option>
                        <option value="4">D / Fair / 50-65%</option>
                    </select>
                    <br />


                    <label>Studied Subjects <span class="r-color">*</span></label>
                    <textarea name="desc" id="desc" class="form-control" rows="5">

                    </textarea>

                    <br />

                    <label>Additional Info — Optional <span class="r-color">*</span></label>
                    <textarea name="achvmnt" id="achvmnt" class="form-control" rows="5">

                    </textarea>
                    <br />
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

<script>
    $(document).ready(function() {


    });
</script>
