<?php


namespace DEK\Models;


class EmpSkillModel extends AbstractModel
{
    /*
     * `id`, `skill_nm`, `proficiency`, `interest`,
     *  `yr_exp`, `justfication`, `emp_id`
     * `emp_skills` WHERE 1
     */

    public $id;
    public $skill_nm;
    public $proficiency;
    public $interest;
    public $yr_exp;
    public $justfication;
    public $emp_id;

    protected static $tableName = 'emp_skills';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'skill_nm'      => self::DATA_TYPE_STR,
        'proficiency' => self::DATA_TYPE_DECIMAL,
        'interest' => self::DATA_TYPE_DECIMAL,
        'yr_exp' => self::DATA_TYPE_INT,
        'justfication' => self::DATA_TYPE_STR,
        'emp_id' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

}