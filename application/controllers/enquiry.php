<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
         function __Construct(){
            parent::__Construct ();
           $db = $this->load->database();
             $this->load->model('EnquiryDetail'); // load model
            $this->load->model('EmployeeDetail','model'); 
          }

        public function followup()
	{     $this->followup = $this->EnquiryDetail->getFollowUp();
                $this->load->template('/enquiry/followup', $this->followup);
	}
         public function edit()
                 
	{    $id = $this->uri->segment(3);
             $this->data=array();
             $this->employees = $this->model->getEmployees();
             $this->data['employees']=$this->employees;
             if($id) {
                  $this->enquiry = $this->EnquiryDetail->getEnquiry($id);
                  $this->data['enquiry']= $this->enquiry;
                  $this->load->template('/enquiry/edit', $this->data);
             }else {
               $this->load->template('/enquiry/edit',$this->data);  
             }
	}
        public function saveEnquiry(){
            $this->enquiryData=$this->input->post();
            
            if(empty($this->enquiryData['enquiry_id'])){
                $this->EnquiryDetail->saveEnquiry($this->enquiryData);
            }else {
                 $this->EnquiryDetail->updateEnquiry($this->enquiryData);
            }
           
        }
         public function delete()
                 
	{    $id = $this->uri->segment(3);
             if(!empty($id)) {
                  $this->enquiry = $this->EnquiryDetail->deleteEnquiry($id);
                
             }else {
                $this->load->template('/employees/list', $this->employeeslist); 
             }
	}
}
