<?php


namespace DEK\Models;


class SearchStatusModel extends AbstractModel
{
    /*
     * `id`, `srch_stts_nm`, `stts` `search_status` WHERE 1
     */

    public $id;
    public $srch_stts_nm;
    public $stts;

    protected static $tableName = 'search_status';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'srch_stts_nm'     => self::DATA_TYPE_STR,
        'stts'  => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

}