<?php
namespace DEK\Models;

class JobModel extends AbstractModel
{
	
	/*
	``, ``, ``, ``, `confidential`, ``, 
	``, `notify_period`, ``, ``, ``, ``, ``, 
	``, ``, ``, ``, ``, ``, ``, ``, ``, 
	``, `uploader_id`, `company_id` 
	*/
	public $id;
    public $title;
    public $exp_years;
    public $salary_from;
    public $salary_to;
    public $salary_time_per;
    public $salary_add_details ;
    public $salary_hidden;
    public $num_vacancies;
    public $job_description;
    public $job_requirements;
    public $confidential;
    public $notify_emaily;
    public $notify_email;
    public $notify;
    public $notify_period;
    public $education_degree;
    public $edu_level_choices;
    public $academic_excellence;
    public $gender;
    public $hide_gender;
	public $job_types;
	public $job_industries;
	public $job_rules;
    public $publish;
    public $reviewed;
    public $create_at;
    public $update_at;
    public $type;
    public $coutry_id;
    public $city_id;
    public $area_id;
    public $carrer_level_id;
    public $salary_currency_id;
    public $uploader_id;
    public $company_id;
    /**
     * @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'job_posts';

    protected static $tableSchema = array(
		'id'           	 			=> self::DATA_TYPE_INT,
		'title'  					=> self::DATA_TYPE_STR,
		'exp_years'  				=> self::DATA_TYPE_INT,
		'salary_from' 				=> self::DATA_TYPE_DECIMAL,
		'salary_to'  				=> self::DATA_TYPE_DECIMAL,
		'salary_time_per'  			=> self::DATA_TYPE_INT,
		'salary_add_details'   		=> self::DATA_TYPE_STR,
		'salary_hidden'  			=> self::DATA_TYPE_INT,
		'num_vacancies'  			=> self::DATA_TYPE_INT,
		'job_description'  			=> self::DATA_TYPE_STR,
		'job_requirements'  		=> self::DATA_TYPE_STR,
		'confidential'  			=> self::DATA_TYPE_INT,
		'notify_emaily'  			=> self::DATA_TYPE_INT,
		'notify_email'  			=> self::DATA_TYPE_STR,
		'good_notify'  				=> self::DATA_TYPE_INT,
		'notify_period'  			=> self::DATA_TYPE_INT,
		'education_degree'  		=> self::DATA_TYPE_INT,
		'edu_level_choices'  		=> self::DATA_TYPE_INT,
		'academic_excellence'   	=> self::DATA_TYPE_INT,
		'gender'  					=> self::DATA_TYPE_INT,
		'hide_gender'  				=> self::DATA_TYPE_INT,
		'job_types'  				=> self::DATA_TYPE_STR,
		'job_industries'  			=> self::DATA_TYPE_STR,
		'job_rules'  				=> self::DATA_TYPE_STR,
		'publish'  					=> self::DATA_TYPE_INT,
		'reviewed'  				=> self::DATA_TYPE_INT,
		'create_at'  				=> self::DATA_TYPE_STR,
		'update_at'  				=> self::DATA_TYPE_STR,
		'type'  					=> self::DATA_TYPE_INT,
		'coutry_id' 				=> self::DATA_TYPE_INT,
		'city_id'  					=> self::DATA_TYPE_INT,
		'area_id'  					=> self::DATA_TYPE_INT,
		'carrer_level_id'  			=> self::DATA_TYPE_INT,
		'salary_currency_id'  		=> self::DATA_TYPE_INT,
		'uploader_id'  				=> self::DATA_TYPE_INT,
		'company_id'  				=> self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    public static function get_job_applications ($job_id){
		return self::get(
        'SELECT * FROM `job_post_application` WHERE `job_id` = '.$job_id
        );
		
	}


}