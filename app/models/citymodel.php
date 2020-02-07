<?php
namespace DEK\Models;

class cityModel extends AbstractModel
{
	
	public $id;
    public $name;
    public $state_id;
    public $state_code;
    public $country_code;
    public $latitude;
    public $longitude ;
    public $created_at;
    public $updated_on;
    public $flag;
    public $wikiDataId;
    /**
     * @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'cities';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'name'          => self::DATA_TYPE_STR,
        'state_id'          => self::DATA_TYPE_INT,
        'state_code'             => self::DATA_TYPE_STR,
        'country_id'       => self::DATA_TYPE_INT,
        'country_code'       => self::DATA_TYPE_STR,
        'latitude'       => self::DATA_TYPE_STR,
        'longitude'       => self::DATA_TYPE_STR,
        'created_at'       => self::DATA_TYPE_STR,
        'updated_on'  => self::DATA_TYPE_STR,
        'flag' => self::DATA_TYPE_INT,
        'wikiDataId'           => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

}