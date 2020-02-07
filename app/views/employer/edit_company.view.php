<?php 
$companyIndustries_ = $company->company_industries;
$companyIndustries  = array();
if ($companyIndustries_ != '' && $companyIndustries_ != null ){
	$companyIndustries  = explode(',',$companyIndustries_ );
}
//var_dump($companyIndustries);
?>	

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
			
			<div class="section-full bg-white p-t50 p-b20">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
						<?php include_once 'inc.sidbar.php'; ?>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="job-bx submit-resume">
								<div class="job-bx-title clearfix">
									<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_title_Company_Information ?></h5>
									<a href="<?= SITE_URL ?>employer/" class="site-button right-arrow button-sm float-right"><?= $text_button_Back ?></a>
								</div>
								
								<form action='' method='post'>
									<div class="row m-b30">
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Company_Name ?></label>
												<input type="text" name='' class="form-control" value='<?= $company->company_name ?>' placeholder="Enter Company Name" style=" background-color: #ededed !important;"  disabled='disabled'>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Country ?></label>
												<input name='' type="text" value = '<?= $company->country_id ?>' class="form-control" placeholder="London" style=" background-color: #ededed !important;" disabled='disabled'>
											</div>
											<span> *To change your company name or country please email us at:support@darelkhebra.net </span><br><br>
										</div>
										<br>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_City ?></label>
												<input name='' type="text" value ='<?= $company->city_id ?>' class="form-control" placeholder="Delhi">
											</div>
										</div>
										<div style='margin-left:15px;'>
											
												<input type="checkbox" name="vehicle1" value="Bike" style='margin-right: 10px;'><?= $text_input_This_is_a_multinational_company?><br>
												<input type="checkbox" name="vehicle2" value="Car" style='margin-right: 10px;'> <?= $text_input_This_is_a_startup_company?>
											
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<br><label><?= $text_label_Industry_of_Company ?>  </label>
												<select class="multipleSelect form-control" multiple name="job_industries[]"  style='font-size:12px !important;'>
															<?php	if(false !== $job_industries) {
																foreach ($job_industries as $job_industry) {
																	$sel = '' ;
																	if(in_array($job_industry->id,$companyIndustries)){
																	$sel = 'selected="selected"' ;	
																	}
														?>		
															<option value="<?php echo $job_industry->id; ?>" <?= $sel ?>> <?php echo $job_industry->industry_name; ?></option>
														<?php	
														}
														}
														?>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Company_size ?></label>
												<select class="form-control"  name="company_size_id"  style='font-size:12px !important;'>
															<?php	if(false !== $company_sizes) {
																foreach ($company_sizes as $company_size) {
																	$sel = '' ;
																	if($company_size->id==$company->company_size_id){
																	$sel = 'selected="selected"' ;	
																	}
														?>		
															<option value="<?php echo $company_size->id; ?>" <?= $sel ?>> <?php echo $company_size->size; ?></option>
														<?php	
														}
														}
														?>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Specialities ?></label>
												<textarea class="form-control" name="specialities"><?= $company->specialities ?></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Year_Founded ?></label>
												<input type="number" name='founded_year' value ='<?= $company->founded_year ?>' class="form-control" placeholder="Delhi">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Type_of_company ?> </label>
												<select class="form-control"  name="company_size_id"  style='font-size:12px !important;'>
												<?php	if(false !== $company_types) {
																foreach ($company_types as $company_type) {
																	$sel = '' ;
																	if($company_type->id==$company->type_id){
																	$sel = 'selected="selected"' ;	
																	}
															?>		
												<option value="<?php echo $company_type->id; ?>" <?= $sel ?>> <?php echo $company_type->company_type; ?></option>
														<?php	
														}
														}
														?>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
										<div class="job-bx-title clearfix">
										<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_label_company_profile ?> </h5><br>
										
									</div>
										<p><?= $text_p_Write_below_your_company_profile_which_will_appear_with_each_of_your_job_posts_you_will_still_have_the_option_to_hide_it_from_any_of_your_jobs?></p>
											<div class="form-group">
												<label><?= $text_label_Add_company_profile ?>  </label>
												<textarea class="form-control" name='company_profile'><?= $company->company_profile ?></textarea>
											</div>
											
										</div>
									</div>
									<!-- Contact Information -->
									<div class="job-bx-title clearfix">
										<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_label_Contact_Information ?> </h5>
									</div>
									<div class="row m-b30">
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_label_Phone ?></label>
												<input type="text" name="" value ='<?= $company->company_phone ?>' class="form-control" placeholder="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_label_fax ?></label>
												<input  name="" type="text" value ='<?= $company->fax ?>' class="form-control" placeholder="">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Address ?></label>
												<input   name="" type="text" value ='<?= $company->company_name ?>' class="form-control" placeholder="">
											</div>
										</div>
										
									</div>
									<!-- Social Link -->
									<div class="job-bx-title clearfix">
										<h5 class="font-weight-700 pull-left text-uppercase"><?= $text_label_company_online_presence ?> </h5>
									</div>
									<div class="row">
									<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label><?= $text_label_Website ?></label>
												<input type="text" value = '<?= $company->website ?>' class="form-control" placeholder="Website Link">
											</div>
									</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_label_Facebook ?></label>
												<input  name="" type="text" value ='<?= $company->facebook ?>' class="form-control" placeholder="https://www.facebook.com/">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_label_Twitter ?></label>
												<input  name="" type="text"  value ='<?= $company->twitter ?>' class="form-control" placeholder="https://www.twitter.com/">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label><?= $text_label_Linkedin ?></label>
												<input  name="" type="text" value ='<?= $company->linkedin ?>' class="form-control" placeholder="https://www.linkedin.com/">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Blog</label>
												<input  name="" type="text" value ='<?= $company->blog ?>' class="form-control" placeholder="https://www.linkedin.com/">
											</div>
										</div>
									</div>
								<button type="submit"  name ='save_edit' class="site-button m-b30"><?= $text_button_SAVE_EDITS ?> </button>
								<button type="button" class="site-button m-b30"><?= $text_button_Cancel ?> </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Browse Jobs END -->
			
<script>
$('.multipleSelect').fastselect();
</script>