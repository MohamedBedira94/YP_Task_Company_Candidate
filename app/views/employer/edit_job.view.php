<!-- Browse Jobs --> 
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
					<!-- 
					SELECT   `confidential`, `notify_emaily`,
					`notify`, `notify_period`, `education_degree`, `edu_level_choices`, `academic_excellence`, `gender`, 
					`hide_gender` FROM `job_posts` WHERE 1
					-->
						<div class="col-xl-3 col-lg-4 m-b30">
						<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
						<form method='post' action=''>
							<div class="job-bx submit-resume">
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Edit_Job ?></h5>
									<a href="\employer" class="site-button right-arrow button-sm float-right"><?= $text_button_Back?></a>
								</div>
								<!--<h5><?= $text_title_Job_Inof ?> </h5>-->
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Job_Title ?> </label>
												<input name='title' type="text" value='<?= $job->title ?>' class="form-control" placeholder="Enter Job Title">
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
												<?php 
												$sel1 =$sel2 =$sel3 =$sel4 =$sel5 = '';
												if ($job->carrer_level_id==1) {
													$sel1 ='selected=selected';
												}else if ($job->carrer_level_id==2) {
													$sel2 ='selected=selected';
												}else if ($job->carrer_level_id==3) {
													$sel3 ='selected=selected';
												}else if ($job->carrer_level_id==4) {
													$sel4 ='selected=selected';
												}else if ($job->carrer_level_id==5) {
													$sel5 ='selected=selected';
												}?>
													<option value='1' <?= $sel1?>>1 Years</option>
													<option value='2' <?= $sel2?>>2 Years</option>
													<option value='3' <?= $sel3?>>3 Years</option>
													<option value='4' <?= $sel4?>>4 Years</option>
													<option value='5' <?= $sel5?>>5 Years</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Years_of_Experience ?>  </label>
												<select  name='exp_years'>
													<?php 
												$sel1 =$sel2= $sel3 =$sel4 =$sel5 = '';
												if ($job->exp_years==1) {
													$sel1 ='selected=selected';
												}else if ($job->exp_years==2) {
													$sel2 ='selected=selected';
												}else if ($job->exp_years==3) {
													$sel3 ='selected=selected';
												}else if ($job->exp_years==4) {
													$sel4 ='selected=selected';
												}else if ($job->exp_years==5) {
													$sel5 ='selected=selected';
												}?>
													<option value='1' <?= $sel1?>>1 Years</option>
													<option value='2' <?= $sel2?>>2 Years</option>
													<option value='3' <?= $sel3?>>3 Years</option>
													<option value='4' <?= $sel4?>>4 Years</option>
													<option value='5' <?= $sel5?>>5 Years</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Minimum_Salary ?> </label>
												<input  name='salary_from' value='<?= $job->salary_from ?>'  type="number" class="form-control" placeholder="e.g. 10000">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Maximum_Salary ?></label>
												<input   name='salary_to' value='<?= $job->salary_to ?>' type="number" class="form-control" placeholder="e.g. 20000">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Currency ?></label>
												<select  name='salary_currency_id' >
												<?php 
												$sel1 =$sel2= $sel3 = '';
												if ($job->salary_currency_id==1) {
													$sel1 ='selected=selected';
												}else if ($job->salary_currency_id==2) {
													$sel2 ='selected=selected';
												}else if ($job->salary_currency_id==3) {
													$sel3 ='selected=selected';
												}?>
													<option value='1' <?= $sel1?>>Dollar</option>
													<option value='2' <?= $sel2?>>EGP</option>
													<option value='3' <?= $sel3?>>Euro</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_lable_Salary_per ?> </label>
												<select  name='salary_time_per'>
												<?php 
												$sel1 =$sel2= $sel3 = '';
												if ($job->salary_time_per==1) {
													$sel1 ='selected=selected';
												}else if ($job->salary_time_per==2) {
													$sel2 ='selected=selected';
												}?>
													<option value='1' <?= $sel1?>>Month</option>
													<option value='2' <?= $sel2?>>Year</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
											<?php $sel1  = '';
												if ($job->salary_hidden==1) {
													$sel1 ='checked=checked';
												}
												?>
											<label><?= $text_lable_hidden_sallary ?>  <input  name='salary_hidden' value='1' type = 'checkbox'  <?= $sel1 ?>></label>
											</div> 
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Additional_sallary_Details ?> </label>
												<input  name='salary_add_details' value='<?= $job->salary_add_details ?>' type="text" class="form-control" />
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Number_Of_Vacancies ?>  </label>
											<input  name='num_vacancies' value='<?= $job->num_vacancies ?>' type="number" class="form-control" />
											</div>
										</div>
											
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Job_Role ?></label>
												<input  name='' type="text" class="form-control tags_input" value=""/>
												
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Related_Industry ?></label>
												<input  name='' type="text" class="form-control tags_input" value=""/>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Job_Type ?> </label>
												<input name='type' type="text" class="form-control tags_input" value=""/>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Job_Describtion ?> </label>
												<span><? $text_p_write_your_job_summary_and_resposibilities?> </span>
												<textarea  name='job_description'  class="form-control" rows="5" id="comment"><?= $job->job_description ?></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_lable_Job_Requirements ?></label>
												<span><? $text_p_write_required_skills_and_expertise_desired_candidate?> </span>
												<textarea  name='job_requirements' class="form-control" rows="5" id="comment"><?= $job->job_requirements ?></textarea>
											</div>
										</div>	
										
									</div>
									
							</div>
						
						
						<div class="job-bx submit-resume" style='margin-top:20px;'>
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_pre_screening_Questions ?> </h5>
								</div>
								
								<div class="row" id='questions'>
								<?php 
								$count = 0 ;
								$indexs = '';
							foreach($job_questions as $key => $job) {
								$count++ ;
									if ($count != 1 ) {
										$indexs = 1;
									} else {
										$indexs .= ','.$count ;
									}			
									   ?>
	   
<div id='question<?= $count?>' class='row col-md-12' style='padding:10px;margin:5px;background:#fffbdf;'>
									<label id='q<?= $count?>-label'>Q<?= $count?> :  </label>
									<input id='q<?= $count?>-input' name='Q<?= $count?>' type="text" class="form-control" value="<?= $job->question ?>" placeholder ='write your question here ?'> 
									</div>
<?php

	   }

?>
									
								</div>
								<div class="row">
								<input id='question_indexs' value="<?= $indexs ?>" type = 'hidden' name='question_indexs'>
								<a id="add_question" class="btn btn-info pull-right" style='background: #2e55fa;color:#fff;'><i class="fa fa-plus" aria-hidden="true"></i> <?= $text_add_Job_Questions ?> </a>
								</div>
								<div class="row" style='margin-top:35px;'>
								<input type='submit' class="site-button m-b30" name='submit' value ='<?= $text_button_Edit?>' >
								<!--<span style='margin:10px;'> <?= $text_p_or ?> </span>  <a href="#" style='margin:10px;'>  <?= $text_button_save_it_and_post_it_later ?></a>-->
								</div>
						</div>
						<!-- from here 
						<div class="job-bx submit-resume" style='margin-top:20px;'>
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Job_Questions ?> </h5>
								</div>
								
								<div class="row">
										
								</div>
								
								
						</div>
						to here -->
						</form>
						
						
						</div>
					</div>
				</div>
			</div>
<!-- Browse Jobs END -->
<script>
var i =<?= $count?> ;
//on clicking adding new question 
$("#add_question").click(function(){
	i++;
		$('#questions').append("<div id='question"+i+"' class='row col-md-12' style='padding:10px;margin:5px;background:#fffbdf;'></div>");
		$('#question'+i).html("<label id='q"+i+"-label'>Q" + i + " :  </label><input id='q"+i+"-input' name='Q"+i+"' type='text' class='form-control'  placeholder ='write your question here ?'> ");
		
		var indexs = $('#question_indexs').val();
		indexs = indexs + ',' + i;
		$('#question_indexs').val(indexs);
	 });

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
	 
	 
</script>
