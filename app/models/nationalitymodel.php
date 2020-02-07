<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class NationalityModel extends AbstractModel
{
    /*
     * `id`, `country_code`, `country_enName`, `country_arName`, `nationltynm_en`, `nationltynm_ar`
     */

    public $id;
    public $country_code;
    public $country_enName;
    public $country_arName;
    public $nationltynm_ar;
    public $nationltynm_en;

    /************** table name ************/
    protected static $tableName = 'nationalities';

    protected static $tableSchema = array(
        'id'      		=> self::DATA_TYPE_INT,
        'country_code'  => self::DATA_TYPE_STR,
        'country_enName'  => self::DATA_TYPE_STR,
        'country_arName'  => self::DATA_TYPE_STR,
        'nationltynm_ar'   		=> self::DATA_TYPE_STR,
        'nationltynm_en'   		=> self::DATA_TYPE_STR
    );

    protected static $primaryKey = 'id';

    public static function get_nationality($nationality_id){
        $nationality_arr = array();
        $sql = 'SELECT id , nationltynm_ar , nationltynm_en FROM nationalities WHERE id = :nationality_id';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':nationality_id', $nationality_id, \PDO::PARAM_INT);
        //$stmt->setFetchMode(\PDO::FETCH_CLASS, 'DEK\Models\NationalityModel');
        $stmt->execute();
        $nationality_arr = $stmt->fetch();
        return $nationality_arr['nationltynm_ar']." - ".$nationality_arr['nationltynm_en'];
    }

    public static function get_all_nationalties(){
        $nationalities= array();
        $sql = 'SELECT id , nationltynm_ar , nationltynm_en FROM nationalities';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $nationalities = $stmt->fetchAll();
        $html = '';
        foreach ($nationalities as $row => $val){
        //$html .='<option value="'.$val['id'].'">"'.$val['nationltynm_ar'].'"</option>';
            $html .='<option id="'.$val['id'].'" value="'.$val['nationltynm_ar']." - ".$val['nationltynm_en'].'" />';
        }
        return $html;
    }


}