<?php
namespace DEK\Models;

class CompanySizeModel extends AbstractModel
{
	/*
	
	SELECT `id`, `size` FROM `company_sizes` WHERE 1
	*/

	public $id;
    public $size;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'company_sizes';

    protected static $tableSchema = array(
        'id'      => self::DATA_TYPE_INT,
        'size'    => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}