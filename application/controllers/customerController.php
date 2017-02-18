<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CustomerController extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('ford_model','ford');
    }
    
    
    function index(){
        $arrdata = array();
        $arrdata['customers'] = $this->ford->getData('customers','*');
        $this->load->template('/customer/index',$arrdata);
        
    }
    function create(){
        
        $this->load->template('/customer/create');
    }
}
