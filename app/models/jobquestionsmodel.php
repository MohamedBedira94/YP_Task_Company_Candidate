<?php
namespace DEK\Models;

class JobQuestionsModel extends AbstractModel
{
	
	/*
	SELECT `id`, `job_id`, `question` FROM `job_questions` WHERE 1
	*/
	public $id;
    public $job_id;
    public $question;

    /**
     * @var UserProfileModel
     */
	 
    public $profile;
    public $privileges;

    protected static $tableName = 'job_questions';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'question'    	=> self::DATA_TYPE_STR,
        'job_id'  		=> self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

    


}