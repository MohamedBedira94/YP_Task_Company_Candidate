<?php
namespace DEK\Models;

class LanguageModel extends AbstractModel
{
	/*
	
	SELECT `id`, `rule_name` FROM `job_rule` WHERE 1
	*/

	public $id;
    public $language;
    public $code;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'language';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'language'     => self::DATA_TYPE_STR,
        'code'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}