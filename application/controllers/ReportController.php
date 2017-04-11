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
    public function pendingview() {
        $this->load->template('report/pendingview');
    }
    
    public function pendingDataReport() {
        $branch = $this->input->post('branch');
         $from_date = date('Y-m-d',strtotime($this->input->post('from_date')));
        $to_date = date('Y-m-d',strtotime($this->input->post('to_date')));
        if($this->input->post('from_date')!="" && $this->input->post('to_date')!=""){
        $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,remaining_amt,amount', array('DATE(delivery_date) >' => $from_date,'DATE(delivery_date) <='=>$to_date,'customer_state <' => 5,'branch'=>$branch));
           
        }else{
        $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,remaining_amt,amount', array('customer_state <' => 5,'branch'=>$branch));
          
        }
        $header = array('Delivery Date', 'Branch', 'Customer Name', 'Vehicle Name', 'VIN No', 'Mobile No', 'Phone No', 'Followup','Cunsultant Name','Email','Finance','Bank Name','Insurance','Vehicle Registration','Address','Document Complete','Payment Complete','Amount');
        $dateshow = date('d-m-Y H:i:s');
        $heading = array(
            'Pending Report Data', '', '', '', "$dateshow"
        );
        if(!empty($customer)){
            foreach ($customer as $key => $value) {
                if($value['document_complete']==1){
                   $customer[$key]['document_complete'] = 'YES'; 
                }else{
                   $customer[$key]['document_complete'] = 'NO'; 
                    
                }
                 if($value['remaining_amt']==1){
                   $customer[$key]['remaining_amt'] = 'YES'; 
                }else{
                   $customer[$key]['remaining_amt'] = 'NO'; 
                    
                }
                if($value['finance']==1){
                   $customer[$key]['finance'] = 'YES'; 
                    
                }else{
                   $customer[$key]['finance'] = 'NO'; 
                    
                }
                
            }
        }
        
        $date = strtotime(date('Y-m-d H:i:s'));
        $name = "Pending_Data_$date.xls";
        $cell_no = "A3:R3";
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
        $branch = $this->input->post('branch');
        $from_date = date('Y-m-d',strtotime($this->input->post('from_date')));
        $to_date = date('Y-m-d',strtotime($this->input->post('to_date')));
        if ($customer_state != "") {
             if($this->input->post('from_date')!="" && $this->input->post('to_date')!=""){
                 
            $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,customer_state,,remaining_amt,amount', array('DATE(delivery_date) >' => $from_date,'DATE(delivery_date) <='=>$to_date,'customer_state' => $customer_state,'branch'=>$branch));
             }else{
            $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,customer_state,,remaining_amt,amount', array('customer_state' => $customer_state,'branch'=>$branch));
                 
             }
            $header = array('Delivery Date', 'Branch', 'Customer Name', 'Vehicle Name', 'VIN No', 'Mobile No', 'Phone No', 'Followup','Cunsultant Name','Email','Finance','Bank Name','Insurance','Vehicle Registration','Address','Document Complete','State','Payment Complete','Amount');
             if(!empty($customer)){
            foreach ($customer as $key => $value) {
                if($value['document_complete']==1){
                   $customer[$key]['document_complete'] = 'YES'; 
                }else{
                   $customer[$key]['document_complete'] = 'NO'; 
                    
                }
                 if($value['remaining_amt']==1){
                   $customer[$key]['remaining_amt'] = 'YES'; 
                }else{
                   $customer[$key]['remaining_amt'] = 'NO'; 
                    
                }
                if($value['finance']==1){
                   $customer[$key]['finance'] = 'YES'; 
                    
                }else{
                   $customer[$key]['finance'] = 'NO'; 
                    
                }
                
            }
        }
            $dateshow = date('d-m-Y H:i:s');
            $heading = array(
                'State Wise Report Data', '', '', "Customer State - $customer_state",'', "$dateshow"
            );
            $date = strtotime(date('Y-m-d H:i:s'));
            $name = "StateWise_Data_$date.xls";
            $cell_no = "A3:T3";
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
         $branch = $this->input->post('branch');
        $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,remaining_amt,amount', array('DATE(delivery_date) >=' => $from_date,'DATE(delivery_date) <='=>$to_date,'branch'=>$branch));
         $header = array('Delivery Date', 'Branch', 'Customer Name', 'Vehicle Name', 'VIN No', 'Mobile No', 'Phone No', 'Followup','Cunsultant Name','Email','Finance','Bank Name','Insurance','Vehicle Registration','Address','Document Complete','Payment Complete','Amount');
         if(!empty($customer)){
            foreach ($customer as $key => $value) {
                if($value['document_complete']==1){
                   $customer[$key]['document_complete'] = 'YES'; 
                }else{
                   $customer[$key]['document_complete'] = 'NO'; 
                    
                }
                if($value['remaining_amt']==1){
                   $customer[$key]['remaining_amt'] = 'YES'; 
                }else{
                   $customer[$key]['remaining_amt'] = 'NO'; 
                    
                }
                if($value['finance']==1){
                   $customer[$key]['finance'] = 'YES'; 
                    
                }else{
                   $customer[$key]['finance'] = 'NO'; 
                    
                }
                
            }
        }
        if(!empty($customer)){
        $dateshow = date('d-m-Y H:i:s');
        $from_date = date('d-m-Y',strtotime($from_date));
        $to_date = date('d-m-Y',strtotime($to_date));
        $heading = array(
            'Date Wise Data', "$from_date - $to_date", "", '', "$dateshow"
        );
        $date = strtotime(date('Y-m-d H:i:s'));
        $name = "Date_Wise_data_$date.xls";
        $cell_no = "A2:S2";
        array_unshift($customer, $header);

        array_unshift($customer, $heading);
        excelGenerate($cell_no, $customer, $name);
    }else{
        
        $this->session->set_flashdata('msg','No Result Found');
        redirect('report/datewisedata','refresh');
    }
    }
    public function paymentWiseData(){
        $this->load->template('report/paymentpedingdata');
    }
     public function paymentDateWiseDataReport() {
        
        $from_date = date('Y-m-d',strtotime($this->input->post('from_date')));
        $to_date = date('Y-m-d',strtotime($this->input->post('to_date')));
         $branch = $this->input->post('branch');
        $customer = $this->ford->getData('customers', 'delivery_date,branch,customer_name,vehicle_name,engine_chesis_no,mobile_no,phone_no,followup,consultant_name,email,finance,bank_name,insurance,vehicle_reg,address,document_complete,remaining_amt,amount', array('DATE(delivery_date) >' => $from_date,'DATE(delivery_date) <='=>$to_date,'branch'=>$branch,'remaining_amt'=>1,'amount >'=>0));
         $header = array('Delivery Date', 'Branch', 'Customer Name', 'Vehicle Name', 'VIN No', 'Mobile No', 'Phone No', 'Followup','Cunsultant Name','Email','Finance','Bank Name','Insurance','Vehicle Registration','Address','Document Complete','Payment Complete','Amount');
         if(!empty($customer)){
            foreach ($customer as $key => $value) {
                if($value['document_complete']==1){
                   $customer[$key]['document_complete'] = 'NO'; 
                }else{
                   $customer[$key]['document_complete'] = 'YES'; 
                    
                }
                if($value['remaining_amt']==1){
                   $customer[$key]['remaining_amt'] = 'YES'; 
                }else{
                   $customer[$key]['remaining_amt'] = 'NO'; 
                    
                }
                if($value['finance']==1){
                   $customer[$key]['finance'] = 'YES'; 
                    
                }else{
                   $customer[$key]['finance'] = 'NO'; 
                    
                }
                
            }
        }
        if(!empty($customer)){
        $dateshow = date('d-m-Y H:i:s');
        $from_date = date('d-m-Y',strtotime($from_date));
        $to_date = date('d-m-Y',strtotime($to_date));
        $heading = array(
            'Payment Wise Data', "$from_date - $to_date", "", '', "$dateshow"
        );
        $date = strtotime(date('Y-m-d H:i:s'));
        $name = "Date_Wise_data_$date.xls";
        $cell_no = "A2:S2";
        array_unshift($customer, $header);

        array_unshift($customer, $heading);
        excelGenerate($cell_no, $customer, $name);
    }else{
        
        $this->session->set_flashdata('msg','No Result Found');
        redirect('report/datewisedata','refresh');
    }
    }
}
