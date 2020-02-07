<?php
namespace DEK\Models;

class EducationLevelModel extends AbstractModel
{
	/*
	
	SELECT `id`, `name`, `notes` FROM `education_levels` WHERE 1
	*/

	public $id;
    public $name;
    public $notes;
   
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'education_levels';

    protected static $tableSchema = array(
        'id'      		=> self::DATA_TYPE_INT,
        'name'   		=> self::DATA_TYPE_STR,
        'notes'   		=> self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}