<?php
namespace DEK\Models;

class UnlockedApplicantModel extends AbstractModel
{
	/*
	
	SELECT `id`, `applicant_id`, `employer_id`, `company_id`, `created_at` FROM `unlocked_employer_applicants` WHERE 1
	*/

	public $id;
    public $applicant_id;
    public $employer_id;
    public $company_id;
    public $created_at;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'unlocked_employer_applicants';

    protected static $tableSchema = array(
        'id'      		 	 => self::DATA_TYPE_INT,
        'applicant_id'       => self::DATA_TYPE_INT,
        'employer_id'      	 => self::DATA_TYPE_INT,
        'company_id'      	 => self::DATA_TYPE_INT,
        'created_at'      	 => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}