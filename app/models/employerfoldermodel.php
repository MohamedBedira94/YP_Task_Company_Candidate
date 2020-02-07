<?php
namespace DEK\Models;

class EmployerFolderModel extends AbstractModel
{
	
	public $id;
    public $folder_name;
    public $employer_id;

    /**
     * @var UserProfileModel
     */
	 /*
	 SELECT `id`, `folder_name`, `employer_id` FROM `employer_folders` WHERE 1
	 */
    public $privileges;

    protected static $tableName = 'employer_folders';

    protected static $tableSchema = array(
        'id'            		=> self::DATA_TYPE_INT,
        'folder_name'          	=> self::DATA_TYPE_STR,
        'employer_id'           => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}