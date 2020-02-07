<?php 
namespace DEK\Controllers;
use DEK\LIB\InputFilter;
use DEK\LIB\Helper;
use DEK\Models\EmployerModel;
use DEK\Models\JobModel;
use DEK\Models\JobQuestionsModel;
use DEK\Models\CompanyModel;
use DEK\Models\JobRuleModel;
use DEK\Models\JobIndustryModel;
use DEK\Models\JobTypeModel;

class AjaxController extends AbstractController
{

public function defaultAction (){

}


public function morepostsAction (){
	
	var_dump ($this->_controller);
	/*
	$controller->setController($this->_controller);
		
		$controller->setAction($this->_action);
		$controller->setParams($this->_params);
		$controller->setTemplate($this->_template);
		$controller->setRegistry($this->_registry);
		//$controller->setLanguage($this->_language);*/
	//	var_dump($controller);
	//	var_dump($actionName);
	//	die();
		//$controller->$actionName();
		
//$this ->_manage_job_internship(1);
		$company_id  =1 ;
		$this->language->load('employer.templateheader');
		$this->language->load('employer.rightMenu');
		$job_or_internship=1;
		$jobs = CompanyModel::get(
        'SELECT job_posts.*,count(job_posts.id) as application_num FROM `job_posts` 
		LEFT JOIN job_post_application ON job_posts.id = job_post_application.job_id 
		WHERE job_posts.company_id = '.$company_id.' AND job_posts.type = '.$job_or_internship.' GROUP BY job_posts.id order by job_posts.id LIMIT 10'
        );
		$html = '<tr>
											<td class="feature">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="check1" name="example1">
													<label class="custom-control-label" for="check1"></label>
												</div>
											</td>
											<td class="job-name">
												<a href="javascript:void(0);">test ajax </a>
												<ul class="job-post-info">
													<li><i class="fa fa-map-marker"></i> Sacramento, California</li>
													<li><i class="fa fa-bookmark-o"></i> Full Time</li>
													<li><i class="fa fa-filter"></i> Web Designer</li>
												</ul>
											</td>
											<td class="application text-primary">(5) Applications</td>
											<td class="application text-primary">20/11/2019</td>
											<td class="expired pending">Pending </td>
											<td class="job-links">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong">
												<i class="fa fa-eye"></i></a>
												<i class="fa fa-edit"></i></a>
												<a href="javascript:void(0);"><i class="ti-trash"></i></a>
											</td>
										</tr>';
		echo $html;
}









}