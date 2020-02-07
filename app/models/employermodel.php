<?php
namespace DEK\Models;

class EmployerModel extends AbstractModel
{
	
	public $id;
    public $title;
    public $phone1;
    public $notes;
    public $status;
    public $recieve_news;
    public $unlock_confirmation ;
    public $emp_type_id;
    public $company_id;
    /**
     * @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'employer';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'title'          => self::DATA_TYPE_STR,
        'phone1'          => self::DATA_TYPE_STR,
        'notes'             => self::DATA_TYPE_STR,
        'status'       => self::DATA_TYPE_STR,
        'recieve_news'  => self::DATA_TYPE_INT,
        'unlock_confirmation' => self::DATA_TYPE_INT,
        'emp_type_id'           => self::DATA_TYPE_INT,
        'company_id'            => self::DATA_TYPE_INT,
    );

    protected static $primaryKey = 'id';

    


}