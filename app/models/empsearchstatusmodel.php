<?php


namespace DEK\Models;


class EmpSearchStatusModel extends AbstractModel
{
   /*
    * `id`, `emp_id`, `search_status`  `emp_search_status` WHERE 1
    */

   public $id;
   public $emp_id;
   public $search_status;

    protected static $tableName = 'emp_search_status';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'emp_id'     => self::DATA_TYPE_INT,
        'search_status'  => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

}