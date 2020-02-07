<?php
namespace DEK\Models;

class JobTypeModel extends AbstractModel
{
	/*
	
	SELECT `id`, `type_name` FROM `job_type` WHERE 1
	*/

	public $id;
    public $type_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'job_type';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'type_name'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}