<?php


namespace DEK\Models;


use DEK\Lib\Database\DatabaseHandler;

class EmpStateModel extends AbstractModel
{

    /*
     * `id`, `name`, `country_id`
     * SELECT * FROM `emp_states` WHERE 1
     */

    public $id;
    public $name;
    public $country_id;

    /************** table name ************/
    protected static $tableName = 'emp_states';


    protected static $tableSchema = array(
        'id'  => self::DATA_TYPE_INT,
        'name' => self::DATA_TYPE_STR,
        'country_id' => self::DATA_TYPE_INT,
    );

    protected static $primaryKey = 'id';

    public static function get_all_states(){
        $states = array();
        $sql = 'SELECT id , name FROM emp_states ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $states = $stmt->fetchAll();
        $html = '';
        foreach ($states as $row => $val){
            $html .='<option value="'.$val['id'].'">'.$val['name'].'</option>';
        }
        return $html;
    }

    public static function get_states_InCountry($country_id){
        $country_states = array();
        $sql = 'SELECT id , name FROM emp_states WHERE country_id = :country_id  ORDER BY name ASC ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':country_id', $country_id, \PDO::PARAM_INT);
        $stmt->execute();
        $country_states = $stmt->fetchAll();
        /*
        $states = $stmt->fetchAll();
        $html = '';
        foreach ($states as $row => $val){
            $html .='<option value='.$val['id'].'>'.$val['name'].'</option>';
        }
        return $html;
        */
        return $country_states;
    }

    public static function get_state_BYID($state_id){
        $state_arr = array();
        $sql = 'SELECT id , name FROM emp_states WHERE id = :state_id ';
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->bindValue(':state_id', $state_id, \PDO::PARAM_INT);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        $state_arr = $stmt->fetch();
        return $state_arr['name'];

    }

}