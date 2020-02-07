<?php


namespace DEK\Models;


class KeywrdsJobtitModel extends AbstractModel
{

    /*
     * `id`, `keywrd_name` `keywords_jobtitles` WHERE 1
     */

    public $id;
    public $keywrd_name;


    protected static $tableName = 'keywords_jobtitles';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'keywrd_name'     => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';


}