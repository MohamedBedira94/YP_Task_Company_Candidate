<?php


namespace DEK\Models;


class EmpHighSchoolModel extends AbstractModel
{
    /*
     * `id`, `school_name`, `country_id`, `certificate_id`, `language_id`,
     *  `grduation_yr`, `grade`, `emp_id`, `addatinal_info`
     *  `emp_high_school` WHERE 1
     */

    public $id;
    public $school_name;
    public $country_id;
    public $certificate_id;
    public $language_id;
    public $grduation_yr;
    public $grade;
    public $emp_id;
    public $addatinal_info;

    protected static $tableName = 'emp_high_school';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'school_name'     => self::DATA_TYPE_STR,
        'country_id'  => self::DATA_TYPE_INT,
        'certificate_id' => self::DATA_TYPE_INT,
        'language_id' => self::DATA_TYPE_INT,
        'grduation_yr' => self::DATA_TYPE_STR,
        'grade' => self::DATA_TYPE_INT,
        'emp_id' => self::DATA_TYPE_INT,
        'addatinal_info' => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

}