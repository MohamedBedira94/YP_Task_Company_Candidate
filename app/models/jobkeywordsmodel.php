<?php
namespace DEK\Models;

class JobKeywordsModel extends AbstractModel
{
	/*
	
	SELECT `id`, `keyword_name` FROM `job_keywords` WHERE 1
	*/

	public $id;
    public $keyword_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'job_keywords';

    protected static $tableSchema = array(
        'id'            	=> self::DATA_TYPE_INT,
        'keyword_name'    	=> self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}