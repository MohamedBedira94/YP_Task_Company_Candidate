<?php
namespace DEK\Models;

class CareerLevelModel extends AbstractModel
{
	/*
	
	SELECT `id`, `level_name` FROM `career_level` WHERE 1
	*/

	public $id;
    public $level_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'career_level';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'level_name'    => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}