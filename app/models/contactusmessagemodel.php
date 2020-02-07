<?php
namespace DEK\Models;

class ContactUsMessageModel extends AbstractModel
{
	/*
	
	SELECT `id`, `name`, `email`, `phone_num`, `subject`, `message`, `is_user`, `user_id`, `about_id` FROM `contact_us_messages` WHERE 1
	*/

	public $id;
    public $name;
    public $email;
    public $phone_num;
    public $subject;
    public $message;
    public $is_user;
    public $user_id;
    public $about_id;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'contact_us_messages';

    protected static $tableSchema = array(
        'id'      		=> self::DATA_TYPE_INT,
        'name'   		=> self::DATA_TYPE_STR,
        'email'   		=> self::DATA_TYPE_STR,
        'phone_num'   	=> self::DATA_TYPE_STR,
        'subject'   	=> self::DATA_TYPE_STR,
        'message'   	=> self::DATA_TYPE_STR,
        'is_user'   	=> self::DATA_TYPE_INT,
        'user_id'   	=> self::DATA_TYPE_INT,
        'about_id'   	=> self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}