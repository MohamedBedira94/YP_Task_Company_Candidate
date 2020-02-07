<?php
namespace DEK\Models;

class SalaryCurrencyModel extends AbstractModel
{
	/*
	
	SELECT `id`, `currency` FROM `salary_currency` WHERE 1
	*/

	public $id;
    public $type_name;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'salary_currency';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'currency'      => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}