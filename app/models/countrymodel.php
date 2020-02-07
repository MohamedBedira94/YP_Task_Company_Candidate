<?php
namespace DEK\Models;

class countryModel extends AbstractModel
{
	
	public $id;
    public $name;
    public $iso3;
    public $iso2;
    public $phonecode;
    public $capital;
    public $currency ;
    public $created_at;
    public $updated_at;
    public $flag;
    public $wikiDataId;
    /**
     * @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'countries';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'name'          => self::DATA_TYPE_STR,
        'iso3'          => self::DATA_TYPE_STR,
        'iso2'             => self::DATA_TYPE_STR,
        'phonecode'       => self::DATA_TYPE_STR,
        'capital'       => self::DATA_TYPE_STR,
        'currency'       => self::DATA_TYPE_STR,
        'created_at'       => self::DATA_TYPE_STR,
        'updated_at'  => self::DATA_TYPE_STR,
        'flag' => self::DATA_TYPE_INT,
        'wikiDataId'           => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}