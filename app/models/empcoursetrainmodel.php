<?php


namespace DEK\Models;


class EmpCourseTrainModel extends AbstractModel
{

    /*
     * `id`, `course_name`, `org_name`, `mnth`, `yr`, `emp_id`, `addational_info`
     *  `emp_train_courses` WHERE 1
     */

    public $id;
    public $course_name;
    public $org_name;
    public $mnth;
    public $yr;
    public $emp_id;
    public $addational_info;

    protected static $tableName = 'emp_train_courses';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'course_name'     => self::DATA_TYPE_STR,
        'org_name' => self::DATA_TYPE_STR,
        'mnth' => self::DATA_TYPE_STR,
        'yr' => self::DATA_TYPE_STR,
        'emp_id' => self::DATA_TYPE_INT,
        'additional_info' => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';
}