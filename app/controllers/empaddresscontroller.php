<?php


namespace DEK\Controllers;


use DEK\Models\EmpCityModel;
use DEK\Models\EmpStateModel;

class EmpAddressController extends AbstractController
{
    public function get_stat_byCountryIDAction()
    {
        $country_states = array();
        $country_id =  $_POST['id'];
        $country_states = EmpStateModel::get_states_InCountry($country_id);

        $html = '';
        foreach ($country_states as $row => $val){
           // $html .='<option value="'.$val['id'].'">'.$val['name'].'</option>';
            $html .='<option id="'.$val['id'].'" value="'.$val['name'].'" />';
        }

        //echo json_encode($country_states);
        echo $html;
    }

    public function get_area_bycityIDAction(){
        $states_areas = array();
        $state_id =  $_POST['id'];
        $states_areas = EmpCityModel::get_areas_InState($state_id);
        $html = '';
        foreach ($states_areas as $row => $val){
            // $html .='<option value="'.$val['id'].'">'.$val['name'].'</option>';
            $html .='<option id="'.$val['id'].'" value="'.$val['name'].'" />';
        }

        //echo json_encode($country_states);
        echo $html;
    }

}