<?php


namespace DEK\Models;


class EmpJobTypeModel extends AbstractModel
{
  /*
   * `id`, `emp_id`, `job_type` `emp_job_type` WHERE 1
   */

  public $id;
  public $emp_id;
  public $job_type;

  protected static $tableName = 'emp_job_type';

  protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'emp_id'     => self::DATA_TYPE_INT,
        'job_type'   => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';



}