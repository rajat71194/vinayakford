<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getProspect($id = 0) {
    $CI = & get_instance();
    $CI->load->model('ford_model');
    $data = 100001;
    if ($id) {
        $data = $data + (int) $id;
        $res = $CI->ford_model->rowUpdate('customers', array('prospect_id' => $data), array('id' => $id));
    }
    return $data;
}
