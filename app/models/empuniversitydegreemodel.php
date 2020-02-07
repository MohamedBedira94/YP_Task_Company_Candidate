<?php


namespace DEK\Models;


class EmpUniversityDegreeModel extends AbstractModel
{
  /*
   * `id`, `degree_name`, `university_name`, `dt_frm`, `dt_to`, `emp_id` `emp_university_degrees` WHERE 1
   */

    public $id;
    public $degree_name;
    public $university_name;
    public $dt_frm;
    public $dt_to;
    public $emp_id;

    protected static $tableName = 'emp_university_degrees';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'degree_name'     => self::DATA_TYPE_STR,
        'university_name'  => self::DATA_TYPE_STR,
        'dt_frm' => self::DATA_TYPE_DATE,
        'dt_to' => self::DATA_TYPE_DATE,
        'emp_id' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';


}