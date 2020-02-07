<?php
namespace DEK\Models;

class PlansModel extends AbstractModel
{
	/*
	
	SELECT `id`, `title`, `n_months`, `price`, `discount` FROM `plans` WHERE 1
	*/

	public $id;
    public $title;
    public $n_months;
    public $price;
    public $discount;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'plans';

    protected static $tableSchema = array(
        'id'            	=> self::DATA_TYPE_INT,
        'title'          	=> self::DATA_TYPE_STR,
        'n_months'          => self::DATA_TYPE_INT,
        'price'          	=> self::DATA_TYPE_STR,
        'discount'          => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}