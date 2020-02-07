<?php


namespace DEK\Models;


class EmpWorkExpModel extends AbstractModel
{
    /*
     * `id`, `experience_type`, `job_title`, `job_role`, `company_name`, `mnth_frm`, `yr_frm`, `mnth_to`,
     *  `yr_to`, `still_wrk_here`, `description`, `career_level`, `country_id`, `company_size`, `comp_industry`,
     *  `comp_website`, `achievements`, `strt_sal`, `end_sal`, `sal_info`, `hide_sal`, `emp_id
     *  `emp_work_experience` WHERE 1
     */

    public $id;
    public $experience_type;
    public $job_title;
    public $job_role;
    public $company_name;
    public $mnth_frm;
    public $yr_frm;
    public $mnth_to;
    public $yr_to;
    public $still_wrk_here;
    public $description;
    public $career_level;
    public $country_id;
    public $company_size;
    public $comp_industry;
    public $comp_website;
    public $achievements;
    public $strt_sal;
    public $end_sal;
    public $sal_info;
    public $hide_sal;
    public $emp_id;

    protected static $tableName = 'emp_work_experience';

    protected static $tableSchema = array(
        'id'              => self::DATA_TYPE_INT,
        'experience_type' => self::DATA_TYPE_INT,
        'job_title'  => self::DATA_TYPE_STR,
        'job_role' => self::DATA_TYPE_INT,
        'company_name' => self::DATA_TYPE_STR,
        'mnth_frm' => self::DATA_TYPE_STR,
        'yr_frm' => self::DATA_TYPE_STR,
        'mnth_to' => self::DATA_TYPE_STR,
        'yr_to' => self::DATA_TYPE_STR,
        'still_wrk_here' => self::DATA_TYPE_INT,
        'description' => self::DATA_TYPE_STR,
        'career_level' => self::DATA_TYPE_INT,
        'country_id' => self::DATA_TYPE_INT,
        'company_size' => self::DATA_TYPE_INT,
        'comp_industry' => self::DATA_TYPE_INT,
        'comp_website' => self::DATA_TYPE_STR,
        'achievements' => self::DATA_TYPE_STR,
        'strt_sal' => self::DATA_TYPE_DECIMAL,
        'end_sal' => self::DATA_TYPE_DECIMAL,
        'sal_info' => self::DATA_TYPE_STR,
        'hide_sal' => self::DATA_TYPE_INT,
        'emp_id' => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

}