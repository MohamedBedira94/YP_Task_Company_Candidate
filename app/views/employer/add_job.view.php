<!-- Browse Jobs -->
	<style>
.fstElement { font-size: 0.8em; }
.fstToggleBtn { min-width: 16.5em; }
.fstMultipleMode { display: block; }
.fstMultipleMode .fstControls { width: 100%; }
.multipleSelect button.btn.dropdown-toggle.btn-default {
    display: none;
}
.multipleSelect.btn-group.bootstrap-select.show-tick.multipleSelect.form-control {
    display: none;
}
input.fstQueryInput.fstQueryInputExpanded{
	background-color: #fff !important;
	border:0 !important;
	box-shadow: 0 0 10px 0 rgba(0,24,128,0.1) !important;
}
 </style>
 <?php //var_dump($job_rules);?>
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
						<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30 ">
							<form method='post' action=''>
							
								<div class="job-bx submit-resume">
										<div class="job-bx-title clearfix">
											<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Post_New_Job ?></h5>
											<a href="\employer" class="site-button right-arrow button-sm float-right"><?= $text_button_Back?></a>
										</div>
										<!--<h5><?= $text_title_Job_Inof ?> </h5>-->
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Job_Title ?> </label>
														<input name='title' type="text" class="form-control" placeholder="Enter Job Title">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Job_Location ?> </label>
														<select id='coutry_id' name='coutry_id'>
															<option value='1'>America</option>
															<option value='2'>Egypt</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_City ?></label>
														<select  name='city_id'>
															<option class='city_opt country_1' value='1'>New York</option>
															<option class='city_opt country_1' value='2'>London</option>
															<option class='city_opt country_1' value='3'>Los Angeles</option>
															<option class='city_opt country_2' value='4'>Cairo</option>
															<option class='city_opt country_2' value='5'>Giza</option>
															<option class='city_opt country_2' value='6'>Alexandrea</option>
															
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Area ?></label>
														<select  name='area_id'>
															<option class='area_opt city_1' value='1'>New York</option>
															<option class='area_opt city_1' value='2'>London</option>
															<option class='area_opt city_1' value='3'>Los Angeles</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Career_Level ?> </label>
														<select  name='carrer_level_id'>
															<option value='1'>1 Years</option>
															<option value='2'>2 Years</option>
															<option value='3'>3 Years</option>
															<option value='4'>4 Years</option>
															<option value='5'>5 Years</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Years_of_Experience ?>  </label>
														<select  name='exp_years'>
															<option value='1'>1 Years</option>
															<option value='2'>2 Years</option>
															<option value='3'>3 Years</option>
															<option value='4'>4 Years</option>
															<option value='5'>5 Years</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Minimum_Salary ?> </label>
														<input  name='salary_from' type="number" class="form-control" placeholder="e.g. 10000">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Maximum_Salary ?></label>
														<input   name='salary_to' type="number" class="form-control" placeholder="e.g. 20000">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Currency ?></label>
														<select  name='salary_currency_id' >
															<option value='1'>Dollar</option>
															<option value='2'>EGP</option>
															<option value='3'>Euro</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6">
													<div class="form-group">
														<label><?= $text_lable_Salary_per ?> </label>
														<select  name='salary_time_per'>
															<option value='1'>Month</option>
															<option value='2'>Year</option>
														</select>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
													<label><?= $text_lable_hidden_sallary ?>  <input  name='salary_hidden' value='1' type = 'checkbox'  ></label>
													</div> 
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Additional_sallary_Details ?> </label>
														<input  name='salary_add_details' type="text" class="form-control" />
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Number_Of_Vacancies ?>  </label>
													<input  name='num_vacancies' type="number" class="form-control" />
													</div>
												</div>
													
												<div class="col-lg-12 col-md-12">
													<div class="form-group inner">
														<label><?= $text_lable_Job_Role ?></label>
														<select class="multipleSelect form-control" multiple name="job_rules[]"  style='font-size:12px !important;'>>
														<?php	if(false !== $job_rules) {
																foreach ($job_rules as $job_rule) {
														?>		
															<option value="<?php echo $job_rule->id; ?>"><?php echo $job_rule->rule_name; ?></option>
														<?php	
														}
														}
														?>
															
														</select>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Related_Industry ?></label>
														<select class="multipleSelect form-control" multiple name="job_industries[]"  style='font-size:12px !important;'>>
															<?php	if(false !== $job_industries) {
																foreach ($job_industries as $job_industry) {
														?>		
															<option value="<?php echo $job_industry->id; ?>"><?php echo $job_industry->industry_name; ?></option>
														<?php	
														}
														}
														?></select>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Job_Type ?> </label>
														<select class="multipleSelect form-control" multiple name="job_types[]"  style='font-size:12px !important;'>>
															<?php	if(false !== $job_types) {
																foreach ($job_types as $job_type) {
														?>		
															<option value="<?php echo $job_type->id; ?>"><?php echo $job_type->type_name; ?></option>
														<?php	
														}
														}
														?>
														</select>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Job_Describtion ?> </label>
														<span><? $text_p_write_your_job_summary_and_resposibilities?> </span>
														<textarea  name='job_description' class="form-control" rows="5" id="comment"></textarea>
													</div>
												</div>
												
												<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label><?= $text_lable_Job_Requirements ?></label>
														<span><? $text_p_write_required_skills_and_expertise_desired_candidate?> </span>
														<textarea  name='job_requirements' class="form-control" rows="5" id="comment"></textarea>
													</div>
												</div>	
												
											</div>
								</div>
								
								<div class="job-bx submit-resume" style='margin-top:20px;'>
										<div class="job-bx-title clearfix">
											<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_pre_screening_Questions ?> </h5>
										</div>
										
										<div class="row" id='questions'>
											<div id='question1' class='row col-md-12' style='padding:10px;margin:5px;background:#fffbdf;'>
											<label id='q1-label'>Q1 :  </label>
											<input id='q1-input' name='Q1' type="text" class="form-control" value="what's make you the best candidate ? " placeholder ='write your question here ?'> 
											</div>
										</div>
										
										<div class="row">
										<input id='question_indexs' value="1" type = 'hidden' name='question_indexs'>
										<a id="add_question" class="btn btn-info pull-right" style='background: #2e55fa;color:#fff;'><i class="fa fa-plus" aria-hidden="true"></i> <?= $text_add_Job_Questions ?> </a>
										</div>
										
								</div>
								
								<div class="job-bx submit-resume" style='margin-top:20px;'>
									<h2> Job Options </h2>
									<div class="form-group">
										<label><input  name='confidential' value='1' type = 'checkbox'  > Keep company confidential. Hides company name, logo, and profile.</label>
									</div>
									
									<div class="form-group">
										<label>Receiving Applications:</label>
										<span>you will recieve applications on Darelkhebra and notify by email</span>
										<input  name='notify_email' value='<?= $company->business_email ?>' type="email" class="form-control" />
									</div>
									
									<div class="form-group">
										<label>Email Notifications:</label>
										<span>Send me email notifications when there are good candidates.</span>
									<label><input  name='good_notify' id='send_email_per' value='1' type = 'checkbox' checked='checked' > Send me email notifications when there are good candidates.
									<span id='email_periods_cont' ><input type='radio' name='notify_period' value='0' checked='checked'>Daily  <input type='radio' name='notify_period' value='1'> Weekly </span>
									</label>
									</div>
									
								</div>
								
								<div class="job-bx submit-resume" style='margin-top:20px;'>
									<div class="panel panel-default">
									  <div class="panel-heading">
										<h4 class="panel-title">
										  <a id='advanced_settigs' data-toggle="collapse" data-parent="#accordion" href="#collapse3">
										  
										  <span class='case1' style='cursor: pointer;'>
											<i class="fas fa-plus" style='color:orange;'></i> Set advanced and detailed job requirements.
										  </span>
										  <span class='case2' style='display:none;' style='cursor: pointer;'>
										  <i class="fas fa-minus" style='color:orange;'></i> Hide advanced Settings
										  </span>
										  
										  </a>
										</h4>
										 <span class='case1'>(Used to provide better candidate recommendations or filter applications. Important for technical jobs)
										</span>
									  </div>
									  <div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<span> All the below requirements are optional.
											If you don't need them, skip them.
											However, some details like keywords can help us provide you with much better
											candidate recommendations especially if this job is for a technical position.
											</span>
											<div class="col-lg-12 col-md-12">
														
														<div class="form-group row">
															<label class='col-md-4'>Education Level</label>
															<select class='col-md-4'  name='education_degree'>
																<option value='1'>Month</option>
																<option value='2'>Year</option>
															</select>
															<div class='col-md-4'> 
															<input type='radio' name='edu_level_choices' value='0' checked='checked'>at Least  <input type='radio' name='notification_peroid' value='1'> only 
															</div>
														</div>
														
														<div class="form-group row">
															<div class='col-md-8 col-offset-md-4'> 
															<label><input  name='academic_excellence' id='academic_excellence' value='1' type = 'checkbox' checked='checked' >Academic Excellence is important
															(i.e. job seekers with excellent and very good grade will be preferred)</label>
															</div>
														</div>
													</div>
											
											<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label>Languages</label>
														<select class="multipleSelect form-control" multiple name="languages[]"  style='font-size:12px !important;'>
															<?php	if(false !== $languages) {
																foreach ($languages as $language) {
														?>		
															<option value="<?php echo $language->id; ?>"><?php echo $language->language; ?></option>
														<?php	
														}
														}
														?></select>
													</div>
												</div>
											<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label>Travel Frequency  </label>
														<select  name='travel_frequency'>
															<?php	if(false !== $travel_frequencies) {
																foreach ($travel_frequencies as $travel_frequencie) {
														?>		
															<option value="<?php echo $travel_frequencie->id; ?>"><?php echo $travel_frequencie->frequency; ?></option>
														<?php	
														}
														}
														?></select>
													</div>
											</div>
												
											<div class="col-lg-12 col-md-12">
													<div class="form-group">
														<label>Gender</label>
														<select  name='gender'>
															<?php	if(false !== $genders) {
																foreach ($genders as $gender) {
														?>		
															<option value="<?php echo $gender->id; ?>"><?php echo $gender->gender_name ; ?></option>
														<?php	
														}
														}
														?>
														</select>
													</div>
											</div>
										</div>
									  </div>
									</div>
								</div>
	  
								<!-- submit buttons -->
								<div class="job-bx submit-resume" style='margin-top:20px;'>
									<div class="row" style='margin:auto;text-align:center;'>
										<div class='col-md-12'>
										<input type='submit' class="site-button m-b30" style='margin:5px;' name='submit' value ='<?= $text_button_Upload?>' >
										</div>
										<div class='col-md-12'>
										<span class=" m-b30"> <?= $text_p_or ?> </span><br>
										<input type='submit' class="btn btn-link m-b30" name='save_later' value ='<?= $text_button_save_it_and_post_it_later ?>' >
										</div>
									</div>
								</div>
								<!-- #submit buttons -->
							
							</form>
						</div>
					</div>
				</div>
			</div>
<!-- Browse Jobs END -->
<script>
var count =1 ;
//on clicking adding new question 
$("#add_question").click(function(){
	count++;
		$('#questions').append("<div id='question"+count+"' class='row col-md-12' style='padding:10px;margin:5px;background:#fffbdf;'></div>");
		$('#question'+count).html("<label id='q"+count+"-label'>Q" + count + " :  </label><input id='q"+count+"-input' name='Q"+count+"' type='text' class='form-control'  placeholder ='write your question here ?'> ");
		
		var indexs = $('#question_indexs').val();
		indexs = indexs + ',' + count;
		$('#question_indexs').val(indexs);
	});

$('.multipleSelect').fastselect();

//on country change 
$('#coutry_id').change(function(){
	consolelog('contry changed ' );
	$('#city_id').val('');
	$('#area_id').val('');
	$('.city_opt').hide();
	$('.area_opt').hide();
	
	var country_id = $('#coutry_id').val();
	var count_sel = '.country_'+country_id;
	$(count_sel).show();
	
	
});

//on city change 
$('#city_id').change(function(){
	consolelog('city changed ' );
	$('#area_id').val('');
	$('.area_opt').hide();
	
	var city_id = $('#city_id').val();
	var city_sel = '.city_'+city_id;
	$(city_sel).show();
	
	
});
	

$('#send_email_per').click(function (){
	$('#email_periods_cont').toggle();
});	

$('#advanced_settigs').click(function(){
	$('.case1').toggle();
	$('.case2').toggle();
});
	 
/*
	$(function(){
		<!-- tags_Related_Industry   tags_Job_Type -->
		var job_roles = [
			'role1',
			'role2',
			'role3',
			'role4'
		];
		var job_roles = [
			'role1',
			'role2',
			'role3',
			'role4'
		];

		$(".tags_Job_Role").tagComplete({

			keylimit: 1,
			hide: false,
			freeInput : false,
			autocomplete: {
				data: job_roles
			}
		});
		
		
		var data = [
			'css',
			'html',
			'php',
			'jquery'
		];
		$(".tags_input").tagComplete({

			keylimit: 1,
			hide: false,
			autocomplete: {
				data: data
			}
		});
	});
*/	 
</script>

