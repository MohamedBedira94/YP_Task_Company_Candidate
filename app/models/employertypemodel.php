<?php
namespace DEK\Models;

class EmployerTypeModel extends AbstractModel
{
	/*
	
	SELECT `id`, `employer_type` FROM `employer_types` WHERE 1
	*/

	public $id;
    public $employer_type;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'employer_types';

    protected static $tableSchema = array(
        'id'      		 => self::DATA_TYPE_INT,
        'employer_type'  => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}