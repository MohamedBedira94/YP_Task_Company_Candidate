<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class EmpCountryModel extends AbstractModel
{
     /*
      * `id`, `sortname`, `name`, `phonecode`
      * SELECT * FROM `emp_countries` WHERE 1
      */

     public $id;
     public $sortname;
     public $name;
     public $phonecode;

    /************** table name ************/
    protected static $tableName = 'emp_countries';


    protected static $tableSchema = array(
        'id'  => self::DATA_TYPE_INT,
        'sortname' => self::DATA_TYPE_STR,
        'name' => self::DATA_TYPE_STR,
        'phonecode' => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'id';

    public static function get_all_countries(){
        $govs = array();
        $sql = 'SELECT id , name FROM emp_countries ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $govs = $stmt->fetchAll();
        $html = '';
        foreach ($govs as $row => $val){
           $html .='<option value='.$val['id'].'>'.$val['name'].'</option>';
        }
        return $html;
    }

    public static function get_country_byID($country_id){
        $country_arr = array();
        $sql = 'SELECT id , name FROM emp_countries ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
       // $stmt->bindValue(':country_id', $country_id, \PDO::PARAM_INT);
        $stmt->execute();
        $country_arr = $stmt->fetchAll();
        $html = '';
        foreach ($country_arr as $row => $val){
            if($country_id == $val['id']) {
                $html .= '<option value=' . $val['id'] . ' selected>' . $val['name'] . '</option>';
            }else{
                $html .= '<option value=' . $val['id'] . '>' . $val['name'] . '</option>';
            }
        }
        return $html;
    }
}