<?php


namespace DEK\Models;


class EmpCertificateModel extends AbstractModel
{
    /*
     `id`, `certifiacte_name`, `emp_id`, `mnth_awrd`, `yr_awrd`, `org_name`,
     `score`, `out_of`, `score_link`, `certificate_number`, `additional_info`
       `emp_certifications` WHERE 1
     */

    public $id;
    public $certifiacte_name;
    public $emp_id;
    public $mnth_awrd;
    public $yr_awrd;
    public $org_name;
    public $score;
    public $out_of;
    public $score_link;
    public $certificate_number;
    public $additional_info;

    protected static $tableName = 'emp_certifications';

    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'certifiacte_name'     => self::DATA_TYPE_STR,
        'emp_id'  => self::DATA_TYPE_INT,
        'mnth_awrd' => self::DATA_TYPE_STR,
        'yr_awrd' => self::DATA_TYPE_STR,
        'org_name' => self::DATA_TYPE_STR,
        'score' => self::DATA_TYPE_INT,
        'out_of' => self::DATA_TYPE_INT,
        'score_link' => self::DATA_TYPE_STR,
        'certificate_number' => self::DATA_TYPE_STR,
        'additional_info' => self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

}