<?php
namespace DEK\Models;

class ContactUsAboutModel extends AbstractModel
{
	/*
	
	SELECT `id`, `questions` FROM `contact_us_about` WHERE 1
	*/

	public $id;
    public $questions;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'contact_us_about';

    protected static $tableSchema = array(
        'id'      		=> self::DATA_TYPE_INT,
        'questions'   	=> self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}