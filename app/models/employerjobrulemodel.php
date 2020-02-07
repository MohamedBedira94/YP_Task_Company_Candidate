<?php
namespace DEK\Models;

class EmployerJobRuleModel extends AbstractModel
{
	
	public $id;
    public $job_rule_id;
    public $employer_id;

    /**
     * @var UserProfileModel
     */
	 /*
		SELECT `id`, `employer_id`, `job_rule_id` FROM `employer_job_rule` WHERE 1
	 */
    public $privileges;

    protected static $tableName = 'employer_job_rule';

    protected static $tableSchema = array(
        'id'            		=> self::DATA_TYPE_INT,
        'job_rule_id'          	=> self::DATA_TYPE_INT,
        'employer_id'           => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}