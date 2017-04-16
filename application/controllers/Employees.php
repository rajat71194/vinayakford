<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

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
             $this->load->model('EmployeeDetail'); // load model
						 $this->load->model('ford_model', 'ford');
						 if (!$this->session->userdata('admin_id')) {
								 redirect('welcome/login', 'refresh');
						 }
          }
	  function  index(){
	       $this->employeeList();
	  }
        public function employeeList()
	{     $this->employeeslist = $this->EmployeeDetail->getEmployees();
                $this->load->template('/employees/list', $this->employeeslist);
	}
         public function edit()

	{    $id = $this->uri->segment(3);
             if($id) {
                  $this->employees = $this->EmployeeDetail->getEmployee($id);
                  $this->load->template('/employees/edit', $this->employees);
             }else {
               $this->load->template('/employees/edit');
             }
	}
        public function saveEmployee(){
            $this->employeeData=$this->input->post();

            if(empty($this->employeeData['employee_id'])){
                $this->EmployeeDetail->saveEmployee($this->employeeData);
            }else {
                 $this->EmployeeDetail->updateEmployee($this->employeeData);
            }

        }
         public function delete()

	{    $id = $this->uri->segment(3);
             if(!empty($id)) {
                  $this->employees = $this->EmployeeDetail->deleteEmployee($id);

             }else {
                $this->load->template('/employees/list', $this->employeeslist);
             }
	}
}
