<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class EmpCityModel extends AbstractModel
{
    /*
     * `id`, `name`, `state_id`
     * SELECT * FROM `emp_cities` WHERE 1
     */

    public $id;
    public $name;
    public $state_id;

    /************** table name ************/
    protected static $tableName = 'emp_cities';


    protected static $tableSchema = array(
        'id'  => self::DATA_TYPE_INT,
        'name' => self::DATA_TYPE_STR,
        'state_id' => self::DATA_TYPE_INT,
    );

    protected static $primaryKey = 'id';

    public static function get_all_cities(){
        $cities = array();
        $sql = 'SELECT id , name FROM emp_cities ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $cities = $stmt->fetchAll();
        $html = '';
        foreach ($cities as $row => $val){
            $html .='<option value='.$val['id'].'>'.$val['name'].'</option>';
        }
        return $html;
    }

    public static function get_areas_InState($state_id){
        $states_areas = array();
        $sql = 'SELECT id , name FROM emp_cities WHERE state_id = :state_id  ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':state_id', $state_id, \PDO::PARAM_INT);
        $stmt->execute();
        $states_areas = $stmt->fetchAll();
        /*
        $states = $stmt->fetchAll();
        $html = '';
        foreach ($states as $row => $val){
            $html .='<option value='.$val['id'].'>'.$val['name'].'</option>';
        }
        return $html;
        */
        return $states_areas;
    }

    public static function get_area_BYID($area_id){
        $area_arr = array();
        $sql = 'SELECT id , name FROM emp_cities WHERE id = :area_id ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':area_id', $area_id, \PDO::PARAM_INT);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $area_arr = $stmt->fetch();
        return $area_arr['name'];

    }



}