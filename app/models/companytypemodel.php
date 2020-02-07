<?php
namespace DEK\Models;

class CompanyTypeModel extends AbstractModel
{
	/*
	
	SELECT `id`, `company_type` FROM `company_types` WHERE 1
	*/

	public $id;
    public $company_type;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'company_types';

    protected static $tableSchema = array(
        'id'      		 => self::DATA_TYPE_INT,
        'company_type'   => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}