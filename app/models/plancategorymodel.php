<?php
namespace DEK\Models;

class PlanCategoryModel extends AbstractModel
{
	/*
	
	SELECT `id`, `title`, `users_num`, `unlock_num`, `jop_posts`, `invitation_credit`, `extended_views`, `types` FROM `plan_category` WHERE 1
	*/

	public $id;
    public $title;
    public $users_num;
    public $unlock_num;
    public $jop_posts;
    public $invitation_credit;
    public $extended_views;
    public $types;
   
    /**
     * @var UserProfileModel
     */

    public $privileges;

    protected static $tableName = 'plan_category';

    protected static $tableSchema = array(
        'id'            		=> self::DATA_TYPE_INT,
        'title'          		=> self::DATA_TYPE_STR,
        'users_num'         	=> self::DATA_TYPE_INT,
        'unlock_num'        	=> self::DATA_TYPE_INT,
        'jop_posts'         	=> self::DATA_TYPE_INT,
        'invitation_credit'     => self::DATA_TYPE_INT,
        'extended_views'        => self::DATA_TYPE_INT,
        'types'          		=> self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    


}