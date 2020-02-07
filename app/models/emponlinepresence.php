<?php


namespace DEK\Models;


class EmpOnlinePresence extends AbstractModel
{

    /*
     *  `id`, `linkedin_ref`, `facebook_ref`, `twitter_ref`, `behance`,
     *  `instagram_ref`, `github_ref`, `stackovrflw_ref`, `youtube_ref`,
     *  `blog_ref`, `website_ref`, `other_ref`, `emp_id`
     *  `emp_online_presence` WHERE 1
     */

    public $id;
    public $linkedin_ref;
    public $facebook_ref;
    public $twitter_ref;
    public $behance;
    public $instagram_ref;
    public $github_ref;
    public $stackovrflw_ref;
    public $youtube_ref;
    public $blog_ref;
    public $website_ref;
    public $other_ref;
    public $emp_id;

    protected static $tableName = 'emp_online_presence';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'linkedin_ref' => self::DATA_TYPE_STR,
        'facebook_ref' => self::DATA_TYPE_STR,
        'twitter_ref' => self::DATA_TYPE_STR,
        'behance' => self::DATA_TYPE_STR,
        'instagram_ref' => self::DATA_TYPE_STR,
        'github_ref' => self::DATA_TYPE_STR,
        'stackovrflw_ref' => self::DATA_TYPE_STR,
        'youtube_ref' => self::DATA_TYPE_STR,
        'blog_ref' => self::DATA_TYPE_STR,
        'website_ref' => self::DATA_TYPE_STR,
        'other_ref' => self::DATA_TYPE_STR,
        'emp_id' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';


}