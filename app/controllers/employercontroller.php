<?php 
namespace DEK\Controllers;
use DEK\LIB\InputFilter;
use DEK\LIB\Helper;
use DEK\Models\EmployerModel;
use DEK\Models\CompanyModel;
use DEK\Models\CompanyIndustryModel;
use DEK\Models\CompanySizeModel;
use DEK\Models\CompanyTypeModel;
use DEK\Models\JobModel;
use DEK\Models\JobQuestionsModel;
use DEK\Models\JobRuleModel;
use DEK\Models\JobIndustryModel;
use DEK\Models\JobTypeModel;
use DEK\Models\LanguageModel;
use DEK\Models\TravelFrequencyModel;
use DEK\Models\GenderModel;

class EmployerController extends AbstractController
{
	use InputFilter;
	use Helper;
	private $_rightmenuLinks = [
		0 => [ 
		'title' => 'text_company_profile',
		'link' => 'edit_company'
		],
		1 => [ 
		'title' => 'text_post_a_job',
		'link' => 'add_job'
		],
		2 => [ 
		'title' => 'text_post_a_internship',
		'link' => 'add_internship'
		],
		3 => [ 
		'title' => 'text_manage_jobs',
		'link' => 'manage_jobs'
		],
		4 => [ 
		'title' => 'text_manage_internship',
		'link' => 'manage_internships'
		],
		5 => [ 
		'title' => 'text_resume',
		'link' => 'company_resume'
		],
		6 => [ 
		'title' => 'text_change_password',
		'link' => 'change_password'
		],
		7 => [ 
		'title' => 'text_log_out',
		'link' => 'logout'
		] 
	];
	
	private $_right_active_link = 0;
	
	//------ right menu actions----------//
	
	//edit company2 profile 
	public function edit_companyAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.edit_company');
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] 	= $this ->_right_active_link;
		$this->_data['right_links']    		= $this ->_getrightmenuLinks();
		$this->_data['job_industries'] 		= CompanyIndustryModel::getAll();
		$this->_data['company_sizes']  		= CompanySizeModel::getAll();
		$this->_data['company_types']  		= CompanyTypeModel::getAll();
		
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		if (isset ($_POST['save_edit'])){
			
    $company->company_phone= $this->filterString($_POST['company_phone']);
    $company->testify= $this->filterString($_POST['testify']);
    $company->business_email= $this->filterString($_POST['business_email']);
	if (isset($_POST['is_multinational'])){
			$company->is_multinational = $this->filterString($_POST['is_multinational']);
			}else {
				$company->is_multinational='';
			}
	if (isset($_POST['is_startup'])){
			$company->is_startup = $this->filterString($_POST['is_startup']);
			}else {
				$company->is_startup='';
			}
    $company->specialities= $this->filterString($_POST['specialities']);
    $company->company_profile= $this->filterString($_POST['company_profile']);
    $company->fax= $this->filterString($_POST['fax']);
    $company->website= $this->filterString($_POST['website']);
    $company->facebook= $this->filterString($_POST['facebook']);
    $company->linkedin= $this->filterString($_POST['linkedin']);
    $company->blog= $this->filterString($_POST['blog']);
    $company->twitter= $this->filterString($_POST['twitter']);
    $company->company_size_id= $this->filterString($_POST['company_size_id']);	
    $company->know_us_id= $this->filterInt($_POST['know_us_id']);
    $company->city_id= $this->filterInt($_POST['city_id']);
    $company->area_id= $this->filterInt($_POST['area_id']);
		if ($company -> save()){
				
				$this->messanger->add('edit successfully successfully');
				
				//$_SESSION['message'] = 'job add successfully';
				$redirect_to = SITE_URL.'employer/edit_company/';
				$this->redirect($redirect_to);
			}else {
				echo 'saved failed '; 
			}
		}
		
		$this -> _data ['company']= $company;
		if ($company == false ) {
			$this->redirect(SITE_URL);
		}

		$this ->_view();
	}
	
	//add job post 
	public function add_jobAction(){
		$this ->_add_job_internship(1);
		$this ->_view();
	}
	
	//add intership 
	public function add_internshipAction(){
		$this ->_add_job_internship(2);
		$this ->_view();
	}
	
	//common proccess betweenn adding job & internship 
	private function _add_job_internship($type){
		
		if (!$this->_Is_employer()){
			die('YOU ARE NOT EMPLOYER' );
		}
		if($type == 1 ) {
			$this->language->load('employer.add_job');
		}else if($type == 2 ){
			$this->language->load('employer.add_internship');
		}
		//var_dump ($this->session->companyid);
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		
		
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$this->_data['job_rules'] = JobRuleModel::getAll();
		$this->_data['job_industries'] = JobIndustryModel::getAll();
		$this->_data['job_types'] = JobTypeModel::getAll();
		$this->_data['languages'] = LanguageModel::getAll();
		$this->_data['travel_frequencies'] = TravelFrequencyModel::getAll();
		$this->_data['genders'] = GenderModel::getAll();
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		$this -> _data ['company']= $company;
		$publish = false ;
		if (isset ($_POST['submit']) || isset ($_POST['save_later'])){
			if(isset ($_POST['submit'])){
				$publish =0;
			}else {
				$publish =1;
			}
		//	var_dump($publish);
		//	die();
			$job_types = $job_industries =$job_rules ='';
			if (!empty ($_POST['job_types'])){
				$job_types = implode(',',$_POST['job_types']);
				$job_types = $this->filterString($job_types);
			}
			if (!empty ($_POST['job_industries'])){
				$job_industries = implode(',',$_POST['job_industries']);
				$job_industries = $this->filterString($job_industries);
			}
			if (!empty ($_POST['job_rules'])){
				$job_rules = implode(',',$_POST['job_rules']);
				$job_rules = $this->filterString($job_rules);
			}
			
			$job = new JobModel();	
			$job->title = $this->filterString($_POST['title']);
			$job->exp_years = $this->filterInt($_POST['exp_years']);
			$job->salary_from = $this->filterInt($_POST['salary_from']);
			$job->salary_to = $this->filterInt($_POST['salary_to']);
			$job->salary_time_per = $this->filterInt($_POST['salary_time_per']);
			$job->salary_add_details = $this->filterString($_POST['salary_add_details']);
			if (isset($_POST['salary_hidden'])){
			$job->salary_hidden = $this->filterInt($_POST['salary_hidden']);
			}else {
				$job->salary_hidden='';
			}
			$job->num_vacancies = $this->filterInt($_POST['num_vacancies']);
			$job->job_description = $this->filterString($_POST['job_description']);
			$job->job_requirements = $this->filterString($_POST['job_requirements']);
			if (isset($_POST['confidential'])){
			$job->confidential = $this->filterInt($_POST['confidential']);
			}else {
				$job->confidential='';
			}
			if (isset($_POST['notify_email'])){
			$job->notify_email = $this->filterString($_POST['notify_email']);
			}else {
				$job->notify_email='';
			}
			if (isset($_POST['good_notify'])){
			$job->good_notify = $this->filterInt($_POST['good_notify']);
			}else {
				$job->good_notify='';
			}
			if (isset($_POST['notify_period'])){
			$job->notify_period = $this->filterInt($_POST['notify_period']);
			}else {
				$job->notify_period='';
			}
			if (isset($_POST['education_degree'])){
			$job->education_degree = $this->filterInt($_POST['education_degree']);
			}else {
				$job->education_degree='';
			}
			if (isset($_POST['edu_level_choices'])){
			$job->edu_level_choices = $this->filterInt($_POST['edu_level_choices']);
			}else {
				$job->edu_level_choices='';
			}
			if (isset($_POST['academic_excellence'])){
			$job->academic_excellence = $this->filterInt($_POST['academic_excellence']);
			}else {
				$job->academic_excellence='';
			}
			if (isset($_POST['gender'])){
			$job->gender = $this->filterInt($_POST['gender']);
			}else {
				$job->gender='';
			}
			$languages = '';
			if (isset($_POST['languages'])){
				$languages = $this->filterString($_POST['languages']);
			}
			if (isset($_POST['travel_frequency'])){
			$job->travel_frequency = $this->filterInt($_POST['travel_frequency']);
			}else {
				$job->travel_frequency='';
			}
			
			$job->hide_gender = '';
			$job->publish = $publish;
			$job->reviewed = '';
			//$job->create_at = '';
			$job->update_at = '';		
			$job->type = $type;	// 1=>job , 2=>internship
			$job->job_types =$job_types;
			$job->job_industries= $job_industries;
			$job->job_rules= $this->filterString($_POST['job_rules']);
			$job->coutry_id = $this->filterInt($_POST['coutry_id']);
			$job->city_id = $this->filterInt($_POST['city_id']);
			$job->area_id = $this->filterInt($_POST['area_id']);
			$job->carrer_level_id = $this->filterInt($_POST['carrer_level_id']);
			$job->salary_currency_id = $this->filterInt($_POST['salary_currency_id']);
			$job->company_id = $this->session->companyid;
			$job->uploader_id = $this->session->userid;
			
		//	var_dump ($job);
			if ($job -> save()){
				$question_indexs = $this->filterString($_POST['question_indexs']);
				$question_arr = array();
				
				if (!empty($question_indexs)){
					$ques_indx_arr = explode(',',$question_indexs);
				}
				
				for ($i=0;$i<count($ques_indx_arr);$i++){
					$indx = $ques_indx_arr[$i];
					$input_indx = 'Q'.$indx ;
					if(!empty($_POST[$input_indx])){
					$job_question = new JobQuestionsModel();
					$job_question->question = $this->filterString($_POST[$input_indx]);
					$job_question->job_id = $job ->id;
					$job_question->save();
					}
				}
				
				if ($type == 1){
				$this->messanger->add('job added successfully');
				
				//$_SESSION['message'] = 'job add successfully';
				$redirect_to = '/employer/view_job/'.$job ->id;
				}else {
				$this->messanger->add('internship added successfully');
				
				//$_SESSION['message'] = 'job add successfully';
				$redirect_to = '/employer/view_internship/'.$job ->id;	
				}
				$this->redirect($redirect_to);
			}else {
				echo 'saved failed '; 
			}
			
			//var_dump($employer); 
		}
	}
	
	//view job 
	public function view_jobAction(){
		$this ->view_job_internship(1);
		$this ->_view();
	} 
	
	//view internship
	public function view_internshipAction(){
		$this ->view_job_internship(2);
		$this ->_view();
	}
	
	private function view_job_internship($type){
		$this->language->load('employer.templateheader');
		if($type == 1 ) {
		$this->language->load('employer.view_job');
		}else if($type == 2 ) {
			$this->language->load('employer.view_internship');
		}
		$id = $this->filterInt($this -> _params[0]);
		$job = JobModel::getByPK($id);
		$jobCountryId = $job->coutry_id;
		$jobCityId = $job->city_id;
		$jobAreaId = $job->area_id;
		/*$jobcountry = ;
		$jobcity = ;
		$jobarea = ;
		$jobCareerlevel = ;
		$jobType = ;*/
		if ($job == false ) {
			$this->redirect('/employer');
		}
		$this -> _data['job']= $job;
	}
	
	//edit job 
	public function edit_jobAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.edit_job');
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		$this -> _data ['company']= $company;
		$id = $this->filterInt($this -> _params[0]);
		$job = JobModel::getByPK($id);
		$this -> _data ['job']= $job;
		
		$by = [  'job_id' => $job->id  ] ;
		$job_questions = JobQuestionsModel::getBy($by);
		$this -> _data ['job_questions']= $job_questions;
		
		
		if ($job == false ) {
			$this->redirect('/company_jobs');
		}
		
		if (isset ($_POST['submit'])){
		
			$job->title = $this->filterString($_POST['title']);
			$job->exp_years = $this->filterInt($_POST['exp_years']);
			$job->salary_from = $this->filterInt($_POST['salary_from']);
			$job->salary_to = $this->filterInt($_POST['salary_to']);
			$job->salary_time_per = $this->filterInt($_POST['salary_time_per']);
			$job->salary_add_details = $this->filterString($_POST['salary_add_details']);
			if (isset($_POST['salary_hidden'])){
			$job->salary_hidden = $this->filterInt($_POST['salary_hidden']);
			}else {
				$job->salary_hidden='';
			}
			$job->num_vacancies = $this->filterInt($_POST['num_vacancies']);
			$job->job_description = $this->filterString($_POST['job_description']);
			$job->job_requirements = $this->filterString($_POST['job_requirements']);
			/*$job->confidential = $this->filterInt($_POST['confidential']);
			$job->notify_emaily = $this->filterInt($_POST['notify_emaily']);
			$job->notify = $this->filterInt($_POST['notify']);
			$job->notify_period = $this->filterInt($_POST['notify_period']);
			$job->education_degree = $this->filterInt($_POST['education_degree']);
			$job->edu_level_choices = $this->filterInt($_POST['edu_level_choices']);
			$job->academic_excellence = $this->filterInt($_POST['academic_excellence']);
			$job->gender = $this->filterInt($_POST['gender']);
			$job->hide_gender = $this->filterInt($_POST['hide_gender']);*/
			$job->confidential = '';
			$job->notify_emaily = '';
			$job->notify = '';
			$job->notify_period = '';
			$job->education_degree = '';
			$job->edu_level_choices = '';
			$job->academic_excellence = '';
			$job->gender ='';
			$job->hide_gender = '';
			$job->publish = '';
			$job->reviewed = '';
			$job->create_at = date('y-m-d');
			$job->update_at = '';
			$job->type = $this->filterInt($_POST['type']);
			$job->coutry_id = $this->filterInt($_POST['coutry_id']);
			$job->city_id = $this->filterInt($_POST['city_id']);
			$job->area_id = $this->filterInt($_POST['area_id']);
			$job->carrer_level_id = $this->filterInt($_POST['carrer_level_id']);
			$job->salary_currency_id = $this->filterInt($_POST['salary_currency_id']);
			$job->company_id = $this->session->companyid;
			$job->uploader_id = $this->session->userid;
			
		//	var_dump ($job);
			if ($job -> save()){
				$question_indexs = $this->filterString($_POST['question_indexs']);
				$question_arr = array();
				if (!empty($question_indexs)){
					$ques_indx_arr = explode(',',$question_indexs);
				}
				for ($i=0;$i<count($ques_indx_arr);$i++){
					$indx = $ques_indx_arr[$i];
					$input_indx = 'Q'.$indx ;
					if(!empty($_POST[$input_indx])){
					$job_question = new JobQuestionsModel();
					$job_question->question = $this->filterString($_POST[$input_indx]);
					$job_question->job_id = $job ->id;
					$job_question->save();
					}
				}
					
				$this->messanger->add('job added successfully');
				
				//$_SESSION['message'] = 'job add successfully';
				$redirect_to = '/employer/view_job/'.$job ->id;
				$this->redirect($redirect_to);
			}else {
				echo 'saved failed '; 
			}
			
			//var_dump($employer); 
		}
		/*	
		if (isset ($_POST['submit'])){
		
			
			$employer->title=$this->filterString($_POST['title']);
			$employer->phone1=$this->filterString($_POST['phone1']);
			$employer->notes=$this->filterString($_POST['notes']);;
			$employer->status=$this->filterString($_POST['status']);
			$employer->recieve_news=$this->filterInt($_POST['recieve_news']);
			$employer->unlock_confirmation=$this->filterInt($_POST['unlock_confirmation']);
			$employer->emp_type_id=$this->filterInt($_POST['emp_type_id']);
			$employer->company_id= 1;
			
			if ($employer -> save()){
				$_SESSION['message'] = 'employer edited successfully';
				$this->redirect('/employer');
			}else {
				echo 'saved failed '; 
			}
			
			var_dump($employer); 
		}*/
		
		$this ->_view();
	}
	
	//delete post 
	public function ajax_delete_postAction(){
		$company_id  =$this->session->companyid ;
		$post_id = $_POST['post_id'];
		$post = $this->_get_post($post_id);
		$delete = false;
		
		//existance checked 
		if(false !== $post ){
			if($post->company_id == $company_id ){ //authorization for delete
				$delete = true ;
			}
		}
		
		if ($delete == true ) {
			if ($post -> delete()){
				echo 1;
			}
			
		}else {
		echo 2;
		}
		
	}
	
	private function _delete_post ($post_id){
		
	}
	
	private function _get_post($post_id){
		$post = JobModel::getByPK($post_id);
		return $post ;
	}
	
	
	//company transaction 
	public function company_transactionAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.company_transaction');
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$this ->_view();
	} 
		
	//manage jobs 
	public function manage_jobsAction(){
		$this ->_manage_job_internship(1);	
		$this ->_view();
	}
	
	//manage internships 
	public function manage_internshipsAction(){
		$this ->_manage_job_internship(2);
		$this ->_view();
	}
	
	//ajax more posts 
	public function ajax_more_postsAction (){
		//$this ->_manage_job_internship(1);
		$limit = 5;
		$company_id  =$this->session->companyid ;
		$post_id = $_POST['id'];
		$job_or_internship=$_POST['type'];
		$post_status = $_POST['status'];
		$by = '';
		//3=>['indx'=>'id' ,'value' => '','condition'=>'<'],
		
		$search_option = [ 
		0=>['indx'=>'company_id','value' => $company_id ,'condition'=>'='],
		1=>['indx'=>'type' ,'value' => $job_or_internship ,'condition'=>'='],
		2=>['indx'=>'publish' ,'value' =>$post_status ,'condition'=>'='],
		3=>['indx'=>'id' ,'value' => $post_id,'condition'=>'<']
		];
		if(isset($_GET['by'])){
			if ($_GET['by'] == 'me'){
				$by =$this->session->userid ;
				$by_arr=['indx'=>'uploader_id' ,'value' => $by,'condition'=>'='];
				$search_option[] = $by_arr;
			}
		}
		$post_title ='';
		if (isset($_POST['post_title'])){
			$post_title = $this->filterString($_POST['post_title']);
			if ($post_title != null && $post_title != '' ){
			$title_arr=['indx'=>'title' ,'value' => $post_title,'condition'=>'LIKE'];
			$search_option[] = $title_arr;	
			}
		}
		//$posts = CompanyModel:: get_company_posts ($company_id,$job_or_internship,$post_status,$post_id,$by);
		$posts = CompanyModel:: get_company_posts2 ($search_option);
		//$total_remin = CompanyModel:: get_company_posts_count ($company_id,$job_or_internship,$post_status,$post_id,$by);
		$total_remin = CompanyModel:: get_company_posts_count2 ($search_option);
		
		$html = '';
		$status ='';
		if($post_status ==0 ){
			$status = 'draft';
		}else if($post_status ==1 ){
			$status = 'active';
		}else if($post_status ==2 ){
			$status = 'expired';
		}
		
		if(false !== $posts) {
										$postID = false;
										
										foreach ($posts as $post) {
											$postID = $post->id ;
											
		$html .= '<tr id="p_row_'.$postID.'">
											<!--<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>-->
											<td class="job-name">
												<a href="javascript:void(0);">'.$post->title.' </a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i><span>'.$post->city_name .'</span>,<span>'.$post->country_name.' </span></li>
													<li><i class="fa fa-bookmark-o"></i>'.$post->job_type.'</li>
													<li><i class="fa fa-filter"></i>'.$post->job_rule.'</li>
												</ul>
											</td>
											<td class="application text-primary">('.$post->application_num.') Applications</td>
											<td class="application text-primary">'. date("d/m/Y", strtotime($post->create_at)) .'</td>
											<td class="job-links">
												<a href="view_job/'. $post->id.'"  class="'.$status.'_view_post" id="v_'.$post->id .'">
												<i   class="fa fa-eye"></i></a>
												<a  href="edit_job/'. $post->id.'" ><i id="e_'. $post->id.'" class="fa fa-edit '. $status.'_edit_post" class="fa fa-edit"></i></a>
												<a  href="javascript:void(0);" class = "'.$status.'_delete_post" id="d_'. $post->id .'" href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>';
										}
										if($total_remin > $limit ){
							$html .= '<tr class="show_more_'.$status.'_main" id="show_more_'.$status.'_main'.$postID.'">
											<td colspan = "7"> 
													
        <span id="'.$postID.'" class="show_more_'.$status.'" title="Load more posts">Show more</span>
        <span class="'.$status.'_loding" style="display: none;color:red;"><span class="loding_txt">Loading...</span></span>
   
											</td>
										</tr>';		
										}
		}
		echo $html;
	}
	
	//mutual proccess for manage jobs & internships  
	private function _manage_job_internship($type){
		if($type == 1 ) {
			$this->language->load('employer.manage_jobs');
		}else if($type == 2 ){
			$this->language->load('employer.manage_internships');
		}
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		
		$job_or_internship=$type;
		//3=>['indx'=>'id' ,'value' => '','condition'=>'<'],
		
		$draft_search_option = [ 
		0=>['indx'=>'company_id','value' => $company_id ,'condition'=>'='],
		1=>['indx'=>'type' ,'value' => $type ,'condition'=>'='],
		2=>['indx'=>'publish' ,'value' => '0','condition'=>'=']
		];
		$active_search_option = [ 
		0=>['indx'=>'company_id','value' => $company_id ,'condition'=>'='],
		1=>['indx'=>'type' ,'value' => $type ,'condition'=>'='],
		2=>['indx'=>'publish' ,'value' => '1','condition'=>'=']
		];
		$expired_search_option = [ 
		0=>['indx'=>'company_id','value' => $company_id ,'condition'=>'='],
		1=>['indx'=>'type' ,'value' => $type ,'condition'=>'='],
		2=>['indx'=>'publish' ,'value' => '2','condition'=>'=']
		];
		$by ='';
		if(isset($_GET['by'])){
			if ($_GET['by'] == 'me'){
				$by =$this->session->userid ;
				$by_arr=['indx'=>'uploader_id' ,'value' => $by,'condition'=>'='];
				$draft_search_option[] = $by_arr;
				$active_search_option[] = $by_arr;
				$expired_search_option[] = $by_arr;
			}
		}
		$post_title ='';
		if (isset($_POST['post_title'])){
			$post_title = $this->filterString($_POST['post_title']);
			if ($post_title != null && $post_title != '' ){
			$title_arr=['indx'=>'title' ,'value' => $post_title,'condition'=>'LIKE'];

			$draft_search_option[] = $title_arr;
			$active_search_option[] = $title_arr;
			$expired_search_option[] = $title_arr;
			}
		}
		
		//var_dump($by);
		//$draft_posts = CompanyModel:: get_company_posts ($company_id,$job_or_internship,'0',false,$by);	
		$draft_posts = CompanyModel:: get_company_posts2 ($draft_search_option);	
		$this->_data['draft_posts'] = $draft_posts;
		$draft_total_remin = CompanyModel:: get_company_posts_count2 ($draft_search_option);
		$this->_data['draft_total_remin'] = $draft_total_remin;
		
		$active_posts = CompanyModel:: get_company_posts2 ($active_search_option);	
		$this->_data['active_posts'] = $active_posts;
		$active_total_remin = CompanyModel:: get_company_posts_count2 ($active_search_option);
		$this->_data['active_total_remin'] = $active_total_remin;
		
		$expired_posts = CompanyModel:: get_company_posts2 ($expired_search_option);	
		$this->_data['expired_posts'] = $expired_posts;
		$expired_total_remin = CompanyModel:: get_company_posts_count2 ($expired_search_option);
		$this->_data['expired_total_remin'] = $expired_total_remin;
		
		
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		$this -> _data ['company']= $company;
		
	}
	
	//Resumes
	public function company_resumeAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.company_resume');
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		$this -> _data ['company']= $company;
		
		$this ->_view();
	}
	
	//change password 
	public function change_passwordAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.change_password');
		$this->_setActiveRightLink ();
		$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$company = false;
		if (isset ($this->session->companyid)){
			$company = CompanyModel::getByPK($this->session->companyid);
		}
		$this -> _data ['company']= $company;
		$this ->_view();
	} 
	
	//Logout 
	public function logoutAction (){
		$this->language->load('employer.templateheader');
		$this ->_view();
	} 
	//#------ right menu actions----------#//
	
	//dashboard
    public function defaultAction(){
		
		$this->language->load('employer.templateheader');
		$this->language->load('employer.default');
		$this->_data['employers'] = EmployerModel::getAll();
		//$job_application = JobModel::get_job_applications (1);
		
		$this ->_view();
		
    }
	
	public function comp_usersAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.default');
		$this->_data['employers'] = EmployerModel::getAll();
		$this ->_view();
	}
	
	public function manage_usersAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this->language->load('employer.default');
		$this->language->load('employer.manage_users');
		
		$this->_data['employers'] = EmployerModel::getAll();
		EmployerModel::getAll();
	//	die();
		$this ->_view();
	}
	
	public function add_employerAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.add_employer');
		$this->_setActiveRightLink (false);
		$this->_data['right_active_link'] = false;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		if (isset ($_POST['submit'])){
			$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
			$employer = new EmployerModel();	
			$employer->title=$this->filterString($_POST['title']);
			$employer->phone1=$this->filterString($_POST['phone1']);
			$employer->notes=$this->filterString($_POST['notes']);;
			$employer->status=$this->filterString($_POST['status']);
			$employer->recieve_news=$this->filterInt($_POST['recieve_news']);
			$employer->unlock_confirmation=$this->filterInt($_POST['unlock_confirmation']);
			$employer->emp_type_id=$this->filterInt($_POST['emp_type_id']);
			$employer->company_id= 1;
			
			if ($employer -> save()){
				$this->messanger->add('employer add successfully');
				
				//$_SESSION['message'] = 'employer add successfully';
				$this->redirect('/employer');
			}else {
				echo 'saved failed '; 
			}
			
			//var_dump($employer); 
		}
		
		$this ->_view();
	}
	
	public function edit_employerAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightmenu');
		$this->language->load('employer.edit_employer');
		//$this->_setActiveRightLink (4);
		//$this->_data['right_active_link'] = $this ->_right_active_link;
		$this->_data['right_links'] = $this ->_getrightmenuLinks();
		$id = $this->filterInt($this -> _params[0]);
		$employer = EmployerModel::getByPK($id);
		$this -> _data ['employer']= $employer;
		if ($employer == false ) {
			$this->redirect('/employer');
		}
			
		if (isset ($_POST['submit'])){
		
			$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
			$employer->title=$this->filterString($_POST['title']);
			$employer->phone1=$this->filterString($_POST['phone1']);
			$employer->notes=$this->filterString($_POST['notes']);;
			$employer->status=$this->filterString($_POST['status']);
			$employer->recieve_news=$this->filterInt($_POST['recieve_news']);
			$employer->unlock_confirmation=$this->filterInt($_POST['unlock_confirmation']);
			$employer->emp_type_id=$this->filterInt($_POST['emp_type_id']);
			$employer->company_id= 1;
			
			if ($employer -> save()){
				$_SESSION['message'] = 'employer edited successfully';
				$this->redirect('/employer');
			}else {
				echo 'saved failed '; 
			}
			
			var_dump($employer); 
		}
		
		$this ->_view();
	}

	public function deleteAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$id = $this->filterInt($this -> _params[0]);
		$employer = EmployerModel::getByPK($id);
		if ($employer -> delete()){
			$_SESSION['message'] = 'employer deleted successfully';
			}
			$this->redirect('/employer');$this->redirect('/employer');
	}

	public function dashboardAction(){ 
		$_SESSION['mainActive']= 1;
		$this->language->load('employer.templateheader');
		$this ->_view();
		//$_SESSION['mainActive']= false;
	}
	
	public function view_candidateAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this ->_view();
	}
/*
	public function unlocked_candidateAction(){
		$this->language->load('employer.templateheader');
		$this->language->load('employer.unlocked_candidates');
		$this ->_view();
	}
*/
	public function contact_infoAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this ->_view();
	}

	public function search_all_postsAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this ->_view();
	}

	//---------- Candidate Functions  ---------------//
	public function search_cvsAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this ->_view();
	}
	
	public function unlocked_candidatesAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this->language->load('employer.unlocked_candidates');
		$this ->_view();
	}
	
	public function folder_labelsAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this ->_view();
	}
	
	public function track_inivtationsAction(){
		$company_id  =false;
		if (isset($this->session->companyid)){
			$company_id  =$this->session->companyid ;
		}
		if (false === $company_id ) 
			die('YOU ARE NOT ALLOWED TO ACCESS THIS Page');
		$this->language->load('employer.templateheader');
		$this->language->load('employer.track_inivtations');
		$this ->_view();
	}

	//---------- NON ACTION FUNCTIONS ---------------//
	private function _getrightmenuLinks (){
		return $this->_rightmenuLinks;
	}
	
	private function _setActiveRightLink ($activeIndex=false){
		if ($activeIndex == false ){
		$activeIndex=$this ->_get_activeIndex ();
		}
		$this ->_right_active_link =$activeIndex;
	}
	
	private function _get_activeIndex(){
	   foreach($this->_rightmenuLinks as $key => $element)
	   {
		  if ( $element['link'] === $this->_action)
			 return $key;
	   }
	   return false;
	}
	
	private function _Is_employer (){
		if ($this->session->usertype == 2 ) {
			return true ; 
		}
		return false ;
	}
}	