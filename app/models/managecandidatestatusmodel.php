<?php
namespace DEK\Models;

class ManageCandidateStatusModel extends AbstractModel
{
	/*
	
	SELECT `id`, `manage_id`, `status` FROM `manage_candidate_status` WHERE 1
	*/

	public $id;
    public $manage_id;
    public $status;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'manage_candidate_status';

    protected static $tableSchema = array(
        'id'      		 	 => self::DATA_TYPE_INT,
        'manage_id'      	 => self::DATA_TYPE_INT,
        'status'      	 	 => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}