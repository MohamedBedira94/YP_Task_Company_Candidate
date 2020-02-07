<?php


namespace DEK\Models;


class EmpKeywordsModel extends AbstractModel
{

    /*
     * `id`, `emp_id`, `keywrd_id`  `emp_keywrds_jobtitls` WHERE 1
     */

    public $id;
    public $emp_id;
    public $keywrd_id;


    protected static $tableName = 'emp_keywrds_jobtitls';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'emp_id'     => self::DATA_TYPE_INT,
        'keywrd_id'  => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';
}