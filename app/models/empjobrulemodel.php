<?php


namespace DEK\Models;


class EmpJobRuleModel extends AbstractModel
{
    /*
     * `id`, `emp_id`, `job_rule`  `emp_job_rules` WHERE 1
     */


    public $id;
    public $emp_id;
    public $job_rule;

    protected static $tableName = 'emp_job_rules';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'emp_id'     => self::DATA_TYPE_INT,
        'job_rule' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';




}