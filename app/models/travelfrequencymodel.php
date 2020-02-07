<?php
namespace DEK\Models;

class TravelFrequencyModel extends AbstractModel
{
	/*
	
	SELECT `id`, `frequency` FROM `travel_frequency` WHERE 1
	*/

	public $id;
    public $frequency;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'travel_frequency';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'frequency'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}