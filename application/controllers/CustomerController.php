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
        $this->search();
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
                    'delivery_date' => date('Y-m-d H:i:s', strtotime($data['delivery_date'])),
                    'consultant_name' => $data['consultant_name'],
                    'customer_name' => $data['customer_name'],
                    'followup' => $data['followup'],
                    'finance' => $data['finance'],
                    'bank_name' => $data['bank_name'],
                    'insurance' => $data['insurance'],
                    'remaining_amt' => $data['remaining_amt'],
                    'amount' => $data['amount'],
                    'vehicle_reg' => $data['vehicle_reg'],
                    'branch' => $data['branch'],
                    'vehicle_name' => $data['vehicle_name'],
                    'insurance' => $data['insurance'],
                    'email' => $data['customer_email'],
                    'mobile_no' => $data['customer_mobno'],
                    'phone_no' => $data['customer_phone'],
                    'address' => $data['customer_address'],
                    'engine_chesis_no' => $data['customer_chesisno'],
//                    'payment_complete' => $data['payment_status'],
//                    'customer_payment_reason' => $data['customer_payment_reason'],
//                    'payment_type' => $data['customer_payment'],
//                    'cheque_no' => $data['cheque_no'],
                    'document_complete' => $data['documents_status'],
                   
                    'customer_state' => $data['state'],
                    'active' => 1
                );
                
                $redirect = FALSE;
                if( isset($data['document'])&&$data['document']!=""){
                    $insertArr['document_ids'] = implode(',', $data['document']);
                    $redirect = FALSE;
                }else{
                    $insertArr['document_ids'] = "";
                    $redirect = TRUE;
                    
                }
              
                
//               echo json_encode($insertArr);die;
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);
                    getProspect($insert_id);
                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    getProspect($data['customer_id']);
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['redirect'] = $redirect;
                $result['flag'] = TRUE;
                $result['state'] = 1;
                echo json_encode($result);
                break;
            case 2:
                $insertArr = array(
                    'tax_complete' => $data['tax_payment_status'],
                    'customer_state' => $data['state'],
                     'payment_complete' => $data['payment_status'],
                    'customer_payment_reason' => $data['customer_payment_reason'],
                    'cheque_no' => $data['cheque_no']
                );
                if (isset($data['customer_payment'])) {
                    $insertArr['payment_type'] = $data['customer_payment'];
                }
                if ($data['tax_payment_status'] == '0') {
                    $insertArr['tax_fail_reason'] = $data['tax_payment_reason'];
                }
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);
                    getProspect($insert_id);
                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    getProspect($data['customer_id']);
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $redirect = FALSE;
                if($data['payment_status']!=1){
                 $redirect = TRUE;   
                }
                $result['custíd'] = $id;
                $result['aaa'] = $data['payment_status'];
                $result['flag'] = TRUE;
                $result['redirect'] = $redirect;
                $result['state'] = 2;
                echo json_encode($result);
                break;
            case 3:
                $insertArr = array(
                    'registration_no_type' => $data['registration_no_type'],
                    'document_given_customer' => $data['document_given_to_agent_for_regular_no'],
                    'document_for_no_choice' => $data['document_given_to_agent_for_choice_no'],
                    'customer_state' => $data['state']
                );
                if(isset($data['select_no_for_choice'])){
                    $insertArr['no_for_choice'] = $data['select_no_for_choice'];
                }
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);
                    getProspect($insert_id);
                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    getProspect($data['customer_id']);
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $redirect = FALSE;
                if($data['registration_no_type']!=0){
                if($data['document_given_to_agent_for_regular_no']==0 ){
                 $redirect = TRUE;   
                }
                }else if($data['select_no_for_choice']==0 || $data['document_given_to_agent_for_choice_no']==0){
                 $redirect = TRUE;   
                    
                }
               $amt =  $this->ford->getData('customers',array('remaining_amt','amount'),array('id'=>$id));   
               if(!empty($amt)){
                   if($amt[0]['remaining_amt']==1 && $amt[0]['amount']>0){
                     $redirect = TRUE;   
                   }
               } 
               
               $result['custíd'] = $id;
                $result['flag'] = TRUE;
                $result['redirect'] = $redirect;
                $result['state'] = 3;
                echo json_encode($result);
                break;
            case 4:
                $insertArr = array(
                    'no_given_customer' => $data['no_given_to_customor'],
                    'customer_state' => $data['state'],
                    'call_agent_rc' => $data['call_agent'],
                    'customer_state' => $data['state']
                );
                if(isset($data['file_name'])){
                    $insertArr['file_name'] = $data['file_name'];
                }
                 if ($data['call_agent'] == 0) {
                    $insertArr['rc_dispached_not_reason'] = $data['rc_reason'];
                }
                
                  $config['upload_path']          = './rc_document/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
//                $config['max_size']             = 100;
//                $config['max_width']            = 1024;
//                $config['max_height']           = 768;

              
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);
                    getProspect($insert_id);
                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    getProspect($data['customer_id']);
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
               
                $redirect = FALSE;
                if($data['no_given_to_customor']==0){
                 $redirect = TRUE;   
                }
                $customer = $this->ford->getData('customers', '*',array('id' => $data['customer_id']));
                $result['custdata'] = $customer[0];
                $result['custíd'] = $id;
                $result['flag'] = TRUE;
                $result['redirect'] = FALSE;
                $result['state'] = 4;
                echo json_encode($result);
                break;
            case 5:
               
                $insertArr = array(
                    'delivery_date' => date('Y-m-d H:i:s', strtotime($data['delivery_date'])),
                    'consultant_name' => $data['consultant_name'],
                    'customer_name' => $data['customer_name'],
                    'followup' => $data['followup'],
                    'finance' => $data['finance'],
                    'bank_name' => $data['bank_name'],
                    'insurance' => $data['insurance'],
                    'remaining_amt' => $data['remaining_amt'],
                    'amount' => $data['amount'],
                    'vehicle_reg' => $data['vehicle_reg'],
                    'branch' => $data['branch'],
                    'vehicle_name' => $data['vehicle_name'],
                    'insurance' => $data['insurance'],
                    'email' => $data['customer_email'],
                    'mobile_no' => $data['customer_mobno'],
                    'phone_no' => $data['customer_phone'],
                    'address' => $data['customer_address'],
                    'customer_state' => 5,
                    'engine_chesis_no' => $data['customer_chesisno'],
                    'active' => 1
                );
           
              
                if ($data['customer_id'] == "") {
                    $insert_id = $this->ford->rowInsert('customers', $insertArr);
                    getProspect($insert_id);
                    if ($insert_id) {
                        $id = $insert_id;
                    }
                } else {
                    getProspect($data['customer_id']);
                    $this->ford->rowUpdate('customers', $insertArr, array('id' => $data['customer_id']));
                    $id = $data['customer_id'];
                }
                $result['custíd'] = $id;
                $result['flag'] = TRUE;
                $result['redirect'] = FALSE;
                $result['state'] = 5;
                echo json_encode($result);
                break;
            default:
                break;
        }
    }

    function edit_bk($id = 0) {

        $arrData['customerdata'] = $this->ford->getData('customers', '*', array('id' => $id));

        if (!empty($arrData['customerdata'])) {
            $this->load->template('/customer/edit', $arrData);
        } else {
            redirect('customer/create');
        }
    }

    function delete($id = 0) {

        $this->ford->rowUpdate('customers', array('active' => 0), array('id' => $id));
        redirect('customer');
    }

    function test() {
        $this->load->template('/customer/demo');
    }

    function edit($id = 1) {

        $arrData['customerdata'] = $this->ford->getData('customers', '*', array('id' => $id));

        if (!empty($arrData['customerdata'])) {
            $this->load->template('/customer/edit', $arrData);
        } else {
            redirect('customer/create');
        }
    }

    function search() {
        $arrData['scripts_to_load'] = array('assets/comman/customer.js');
        $this->load->template('/customer/search', $arrData);
    }

    function search_customer() {
        $arrData['scripts_to_load'] = array('assets/comman/customer.js');
//        $this->load->template('/customer/search',$arrData);
        $draw = $this->input->get('sEcho');
        $start = intval($this->input->get('iDisplayStart'));
        $length = intval($this->input->get('iDisplayLength'));
        $search = $this->input->get('sSearch');
        $order_temp = $this->input->get('iSortCol_0') ? $this->input->get('iSortCol_0') : 0;
        $order = $this->input->get('mDataProp_' . $order_temp);
        $order_by = $this->input->get('sSortDir_0') ? $this->input->get('sSortDir_0') : '';
        $search = $this->input->get('sSearch');

        //Custom Data for Filter
        $sales_consultant = $this->input->get('sales_consultant');
        $customer_name = $this->input->get('customer_name');
        $vin_no = $this->input->get('vin_no');
        $prospect_id = $this->input->get('prospect_id');
        $from_date = $this->input->get('from_date');
        $to_date = $this->input->get('to_date');
        $mobile_no = $this->input->get('mobile_no');


        if (empty($search))
            $search = $this->input->get('keywords');

        $search_data = array();
        $search_data['keyword'] = $search;

        $search_data['join'] = array(
        );
        $search_data['column'] = array(
            'customers.*'
        );
        $this->ford->set_table('customers');




        if ($sales_consultant != "") {
            $search_data['where']['consultant_name'] = $sales_consultant;
        }
        if ($mobile_no != "") {
            $search_data['where']['mobile_no'] = $mobile_no;
        }
        if ($customer_name != "") {
            $search_data['where']['customer_name'] = $customer_name;
        }
        if ($vin_no != "") {
            $search_data['where']['engine_chesis_no'] = $vin_no;
        }
        if ($prospect_id != "") {
            $search_data['where']['prospect_id'] = $prospect_id;
        }
        if ($from_date != "" && $to_date!="") {

              
             $search_data['where']['delivery_date >='] = date('Y-m-d H:i:s', strtotime($from_date));
                $search_data['where']['delivery_date <='] = date('Y-m-d', strtotime($to_date));
                
        }

        $search_data['columns'] = array('prospect_id', 'id', 'customer_name', 'engine_chesis_no', 'branch', 'amount', 'vehicle_name', 'followup', 'mobile_no');
        $total = $this->ford->get_all_common_list(TRUE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        $all_users = array();
        if ($total > 0) {
            $all_users = $this->ford->get_all_common_list(FALSE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        }

        $data = array();
//        echo $this->db->last_query();
        foreach ($all_users as $key => $value) {
            $value['branch'] = ucfirst($value['branch']);
            if($value['customer_state']==4 || $value['customer_state']==5){
            $url = base_url('customer/finishstep').'/'.$value['id'];
                
            }else{
            $url = base_url('customer/edit') . '/' . $value['id'];
                
            }
            $value['delivery_date'] = "<a href='" . $url . "' title='Edit Customer'>" . date('d-M-Y', strtotime($value['delivery_date'])) . "</a>";
            $temp = $value;
            $data[] = ($temp);
        }
        $out = array('sEcho' => intval($draw)
            , 'iTotalRecords' => $total
            , 'iTotalDisplayRecords' => $total
            , 'aaData' => $data
        );
        echo json_encode($out);
        exit;
    }

    function payment_pending() {
       
        $this->load->template('/customer/paymentcase');
    }
    function pending_customer() {
        $arrData['scripts_to_load'] = array('assets/comman/customer.js');
//        $this->load->template('/customer/search',$arrData);
        $draw = $this->input->get('sEcho');
        $start = intval($this->input->get('iDisplayStart'));
        $length = intval($this->input->get('iDisplayLength'));
        $search = $this->input->get('sSearch');
        $order_temp = $this->input->get('iSortCol_0') ? $this->input->get('iSortCol_0') : 0;
        $order = $this->input->get('mDataProp_' . $order_temp);
        $order_by = $this->input->get('sSortDir_0') ? $this->input->get('sSortDir_0') : '';
        $search = $this->input->get('sSearch');

        //Custom Data for Filter
        $sales_consultant = $this->input->get('sales_consultant');
        $customer_name = $this->input->get('customer_name');
        $vin_no = $this->input->get('vin_no');
        $prospect_id = $this->input->get('prospect_id');
        $from_date = $this->input->get('from_date');
        $to_date = $this->input->get('to_date');
        $mobile_no = $this->input->get('mobile_no');


        if (empty($search))
            $search = $this->input->get('keywords');

        $search_data = array();
        $search_data['keyword'] = $search;

        $search_data['join'] = array(
        );
        $search_data['column'] = array(
            'customers.*'
        );
        $this->ford->set_table('customers');

        $search_data['where'] = array(
            'remaining_amt'=>1,
            'amount >'=>0
        );

        $search_data['columns'] = array('prospect_id', 'id', 'customer_name', 'engine_chesis_no', 'branch', 'amount', 'vehicle_name', 'followup', 'mobile_no');
        $total = $this->ford->get_all_common_list(TRUE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        $all_users = array();
        if ($total > 0) {
            $all_users = $this->ford->get_all_common_list(FALSE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        }

        $data = array();
//        echo $this->db->last_query();
        foreach ($all_users as $key => $value) {
            $value['branch'] = ucfirst($value['branch']);
            $value['delivery_date'] = "<a href='" . base_url('customer/edit') . '/' . $value['id'] . "' title='Edit Customer'>" . date('d-M-Y', strtotime($value['delivery_date'])) . "</a>";
            $temp = $value;
            $data[] = ($temp);
        }
        $out = array('sEcho' => intval($draw)
            , 'iTotalRecords' => $total
            , 'iTotalDisplayRecords' => $total
            , 'aaData' => $data
        );
        echo json_encode($out);
        exit;
    }
    function pending_case() {
        $arrData['scripts_to_load'] = array('assets/comman/customer.js');
        $this->load->template('/customer/pendingcase', $arrData);
    }
    function case_customer() {
        $arrData['scripts_to_load'] = array('assets/comman/customer.js');
//        $this->load->template('/customer/search',$arrData);
        $draw = $this->input->get('sEcho');
        $start = intval($this->input->get('iDisplayStart'));
        $length = intval($this->input->get('iDisplayLength'));
        $search = $this->input->get('sSearch');
        $order_temp = $this->input->get('iSortCol_0') ? $this->input->get('iSortCol_0') : 0;
        $order = $this->input->get('mDataProp_' . $order_temp);
        $order_by = $this->input->get('sSortDir_0') ? $this->input->get('sSortDir_0') : '';
        $search = $this->input->get('sSearch');

        //Custom Data for Filter
        $sales_consultant = $this->input->get('sales_consultant');
        $customer_name = $this->input->get('customer_name');
        $vin_no = $this->input->get('vin_no');
        $prospect_id = $this->input->get('prospect_id');
        $from_date = $this->input->get('from_date');
        $to_date = $this->input->get('to_date');
        $mobile_no = $this->input->get('mobile_no');


        if (empty($search))
            $search = $this->input->get('keywords');

        $search_data = array();
        $search_data['keyword'] = $search;

        $search_data['join'] = array(
        );
        $search_data['column'] = array(
            'customers.*'
        );
        $this->ford->set_table('customers');

        $search_data['where'] = array(
            'customer_state <'=>5
        );

        $search_data['columns'] = array('prospect_id', 'id', 'customer_name', 'engine_chesis_no', 'branch', 'amount', 'vehicle_name', 'followup', 'mobile_no');
        $total = $this->ford->get_all_common_list(TRUE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        $all_users = array();
        if ($total > 0) {
            $all_users = $this->ford->get_all_common_list(FALSE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        }

        $data = array();
//        echo $this->db->last_query();
        foreach ($all_users as $key => $value) {
            $value['branch'] = ucfirst($value['branch']);
            $now = time(); // or your date as well
            $your_date = strtotime($value['delivery_date']);
            $datediff = $now - $your_date;
            
            $datetime1 = new DateTime($value['delivery_date']);
            $datetime2 = new DateTime(date('Y-m-d'));
            $interval = $datetime1->diff($datetime2);



            $value['ageing'] =$interval->format('%a').' Days';
            $value['delivery_date'] = "<a href='" . base_url('customer/edit') . '/' . $value['id'] . "' title='Edit Customer'>" . date('d-M-Y', strtotime($value['delivery_date'])) . "</a>";
            $temp = $value;
            $data[] = ($temp);
        }
        $out = array('sEcho' => intval($draw)
            , 'iTotalRecords' => $total
            , 'iTotalDisplayRecords' => $total
            , 'aaData' => $data
        );
        echo json_encode($out);
        exit;
    }
    function  upload(){
    $whitelist = array('jpg', 'jpeg', 'png', 'gif');
$name      = null;
$error     = 'No file uploaded.';

if (isset($_FILES)) {
	if (isset($_FILES['files'])) {
		$tmp_name = $_FILES['files']['tmp_name'];
		$name     = basename($_FILES['files']['name']);
                $target_dir = "rc_document/";
                $target_file = $target_dir . basename(basename($_FILES['files']['name']));
		$error    = $_FILES['files']['error'];
		
		if ($error === UPLOAD_ERR_OK) {
			$extension = pathinfo($name, PATHINFO_EXTENSION);

			if (!in_array($extension, $whitelist)) {
				$error = 'Invalid file type uploaded.';
			} else {
				move_uploaded_file($tmp_name, $target_file);
			}
		}
	}
}

echo json_encode(array(
	'name'  => $name,
	'error' => $error,
));
    }
    
    function finishstep($id=-1){
        
        if($id!=-1 && $id>0){
            
        $state =     $this->ford->getData('customers','*',array('id'=>$id));
           if(!empty($state)){
               if($state[0]['customer_state']==4 || $state[0]['customer_state']>=4){
                   $custdata['custdata'] = $state[0];
                   $this->load->template('customer/final_page',$custdata);
               }else{
                    redirect('customer/search');
               }
           }else{
                 redirect('customer/search');
           } 
            
        }else{
            redirect('customer/search');
        }
        
    }
}
