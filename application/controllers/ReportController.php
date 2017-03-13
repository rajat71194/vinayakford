<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ReportController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ford_model', 'ford');
    }

    public function index() {
        $this->load->template('report/index');
    }

    public function pendingDataReport() {
        $customer = $this->ford->getData('customers', 'customers.prospect_id,delivery_date,engine_chesis_no,customer_name,mobile_no,branch,vehicle_name,followup,consultant_name', array('customer_state <' => 5));
        $header = array('Prospect Id', 'Delivery Date', 'Vin No', 'Customer Name', 'Mobile No', 'Branch', 'Vehicle', 'Followup', 'Sales Consultant');
        $dateshow = date('d-m-Y H:i:s');
        $heading = array(
            'Pending Report Data', '', '', '', "$dateshow"
        );
        $date = strtotime(date('Y-m-d H:i:s'));
        $name = "Pending_Data_$date.xls";
        $cell_no = "A3:J3";
        array_unshift($customer, $header);
        array_unshift($customer, array());

        array_unshift($customer, $heading);
        excelGenerate($cell_no, $customer, $name);
    }
    public function statusWiseData(){
        
        $this->load->template('report/statusWiseData');
    }
    public function statusWiseDataReport() {

        $customer_state = $this->input->post('customer_state');
        if ($customer_state != "") {
            $customer = $this->ford->getData('customers', 'customers.prospect_id,delivery_date,engine_chesis_no,customer_name,mobile_no,branch,vehicle_name,followup,consultant_name,customer_state', array('customer_state' => $customer_state));
            $header = array('Prospect Id', 'Delivery Date', 'Vin No', 'Customer Name', 'Mobile No', 'Branch', 'Vehicle', 'Followup', 'Sales Consultant',"Customer State");
            $dateshow = date('d-m-Y H:i:s');
            $heading = array(
                'State Wise Report Data', '', '', "Customer State - $customer_state",'', "$dateshow"
            );
            $date = strtotime(date('Y-m-d H:i:s'));
            $name = "StateWise_Data_$date.xls";
            $cell_no = "A3:J3";
            array_unshift($customer, $header);
            array_unshift($customer, array());

            array_unshift($customer, $heading);
            excelGenerate($cell_no, $customer, $name);
        }
    }
    public function dateWiseData(){
        
        $this->load->template('report/dateWiseData');
    }
    public function dateWiseDataReport() {
        
        $from_date = date('Y-m-d',strtotime($this->input->post('from_date')));
        $to_date = date('Y-m-d',strtotime($this->input->post('to_date')));
        $customer = $this->ford->getData('customers', 'customers.prospect_id,delivery_date,engine_chesis_no,customer_name,mobile_no,branch,vehicle_name,followup,consultant_name', array('delivery_date >' => $from_date,'delivery_date <'=>$to_date));
        $header = array('Prospect Id', 'Delivery Date', 'Vin No', 'Customer Name', 'Mobile No', 'Branch', 'Vehicle', 'Followup', 'Sales Consultant');
        
        if(!empty($customer)){
        $dateshow = date('d-m-Y H:i:s');
        $from_date = date('d-m-Y',strtotime($from_date));
        $to_date = date('d-m-Y',strtotime($to_date));
        $heading = array(
            'Date Wise Data', "$from_date - $to_date", "", '', "$dateshow"
        );
        $date = strtotime(date('Y-m-d H:i:s'));
        $name = "Date_Wise_data_$date.xls";
        $cell_no = "A2:I2";
        array_unshift($customer, $header);

        array_unshift($customer, $heading);
        excelGenerate($cell_no, $customer, $name);
    }else{
        
        $this->session->set_flashdata('msg','No Result Found');
        redirect('report/datewisedata','refresh');
    }
    }
}
