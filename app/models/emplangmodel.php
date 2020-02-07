<?php


namespace DEK\Models;


class EmpLangModel extends AbstractModel
{

    /*
     * `id`, `lang_id`, `read_rt`, `write_rt`, `listen_rt`,
     *  `speak_rt`, `justfiction`, `emp_id`
     *   `emp_languages` WHERE 1
     */

    public $id;
    public $lang_id;
    public $read_rt;
    public $write_rt;
    public $listen_rt;
    public $speak_rt;
    public $justfiction;
    public $emp_id;

    protected static $tableName = 'emp_languages';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'lang_id'      => self::DATA_TYPE_INT,
        'read_rt' => self::DATA_TYPE_DECIMAL,
        'write_rt' => self::DATA_TYPE_DECIMAL,
        'listen_rt' => self::DATA_TYPE_DECIMAL,
        'speak_rt' => self::DATA_TYPE_DECIMAL,
        'justfiction' => self::DATA_TYPE_STR,
        'emp_id' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';
}