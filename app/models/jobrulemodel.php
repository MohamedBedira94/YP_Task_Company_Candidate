<?php
namespace DEK\Models;

class JobRuleModel extends AbstractModel
{
	/*
	
	SELECT `id`, `rule_name` FROM `job_rule` WHERE 1
	*/

	public $id;
    public $rule_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'job_rule';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'rule_name'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}