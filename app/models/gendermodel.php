<?php
namespace DEK\Models;

class GenderModel extends AbstractModel
{
	/*
	
	SELECT `id`, `gender_name` FROM `genders` WHERE 1
	*/

	public $id;
    public $gender_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'genders';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'gender_name'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}