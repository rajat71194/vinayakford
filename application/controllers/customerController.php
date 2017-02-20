<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CustomerController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ford_model', 'ford');
	if (!$this->session->userdata('admin_id')) {
            redirect('welcome/login', 'refresh');
        }
    }

    function index() {
        $arrdata = array();
        $arrdata['customers'] = $this->ford->getData('customers', '*',array('active'=>1));
        $this->load->template('/customer/index', $arrdata);
    }

    function create() {

        $this->load->template('/customer/create');
    }

    function saveData() {
        $state = 0;
        $insertArr = array();
        $data = $this->input->post();
        $state = $data['state'];
        $result['data'] = $data;
       
        switch ($state) {
            case 1:
                $insertArr = array(
                    'customer_name' => $data['customer_name'],
                    'email' => $data['customer_email'],
                    'mobile_no' => $data['customer_mobno'],
                    'phone_no' => $data['customer_phone'],
                    'address' => $data['customer_address'],
                    'engine_chesis_no' => $data['customer_chesisno'],
                    'payment_complete' => $data['payment_status'],
                    'payment_type' => $data['payment_status'],
//                   'cheque_no'=>$data['cheque_no'],
                    'document_complete' => $data['documents_status'],
//                   'document_ids'=>  implode(',', $data['document']),
                    'customer_state' => $data['state'],
                    'active'=>1
                );

//               echo json_encode($insertArr);die;
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);

                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;

                echo json_encode($result);
                break;
            case 2:
                $insertArr = array(
                    'tax_complete' => $data['tax_payment_status'],
                    'customer_state' => $data['state']
                );
                if ($data['tax_payment_status'] == 0) {
                    $insertArr['tax_fail_reason'] = $data['tax_payment_reason'];
                }
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);

                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;

                echo json_encode($result);
                break;
            case 3:
                 $insertArr = array(
                    'registration_no_type' => $data['registration_no_type'],
                    'document_given_customer' => $data['document_given_to_agent_for_regular_no'],
                     'customer_state' => $data['state']
                );
                
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);

                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;

                echo json_encode($result);
                break;
            case 4:
                $insertArr = array(
                    'no_given_customer' => $data['no_given_to_customor'],
                    'customer_state' => $data['state']
                   
                );
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);

                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;

                echo json_encode($result);
                break;
            case 5:
                $insertArr = array(
                    'call_agent_rc' => $data['call_agent'],
                   'customer_state' => $data['state']
                );
                if($data['call_agent']==1){
                    $insertArr['rc_dispached_not_reason'] = $data['rc_reason'];
                }
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);

                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;

                echo json_encode($result);
                break;
            default:
                break;
        }
    }
    function edit($id=0){
        
       $arrData['customerdata'] =  $this->ford->getData('customers','*',array('id'=>$id));
        $this->load->template('/customer/edit',$arrData);
    }
    
    function delete($id=0){
        
        $this->ford->rowUpdate('customers',array('active'=>0),array('id'=>$id));
        redirect('customer');
    }
}
