<?php
namespace DEK\Models;

class JobApplicationModel extends AbstractModel
{
	
	
	public $id;
    public $applicant_id;
    public $job_id;
    public $company_id;
    public $status;
    public $viewd;
    public $managed_status_id;
    public $application_note;
    public $withdraw_id;
    /**
     * @var UserProfileModel
     */
	 /*
	 SELECT `id`, `applicant_id`, `job_id`, `company_id`, `status`, `viewd`, 
	 `managed_status_id`, `application_note`, `withdraw_id` FROM `job_post_application` WHERE 1
	 */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'job_post_application';

    protected static $tableSchema = array(
        'id'            		=> self::DATA_TYPE_INT,
        'applicant_id'          => self::DATA_TYPE_INT,
        'job_id'          		=> self::DATA_TYPE_INT,
        'company_id'            => self::DATA_TYPE_INT,
        'status'       			=> self::DATA_TYPE_INT,
        'viewd'  				=> self::DATA_TYPE_INT,
        'managed_status_id' 	=> self::DATA_TYPE_INT,
        'application_note' 		=> self::DATA_TYPE_STR,
        'withdraw_id'           => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}