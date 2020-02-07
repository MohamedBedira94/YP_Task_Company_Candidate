<?php
namespace DEK\Models;

class FolderApplicantModel extends AbstractModel
{
	/*
	
	SELECT `id`, `folder_id`, `applicant_id` FROM `folder_applicants` WHERE 1
	*/

	public $id;
    public $folder_id;
    public $applicant_id;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'employer_types';

    protected static $tableSchema = array(
        'id'      		 	=> self::DATA_TYPE_INT,
        'folder_id'      	=> self::DATA_TYPE_INT,
        'applicant_id'     	=> self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}