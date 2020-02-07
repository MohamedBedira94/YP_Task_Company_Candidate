<?php
namespace DEK\Models;

class JobIndustryModel extends AbstractModel
{
	/*
	
	SELECT `id`, `industry_name` FROM `job_industry` WHERE 1
	*/

	public $id;
    public $industry_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'job_industry';

    protected static $tableSchema = array(
        'id'            	=> self::DATA_TYPE_INT,
        'industry_name'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}