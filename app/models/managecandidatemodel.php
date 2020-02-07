<?php
namespace DEK\Models;

class ManageCandidateModel extends AbstractModel
{
	/*
	
	SELECT `id`, `job_id`, `employer_id` FROM `manage_candidate` WHERE 1
	*/

	public $id;
    public $job_id;
    public $employer_id;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'manage_candidate';

    protected static $tableSchema = array(
        'id'      		 	 => self::DATA_TYPE_INT,
        'job_id'      		 => self::DATA_TYPE_INT,
        'employer_id'      	 => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}