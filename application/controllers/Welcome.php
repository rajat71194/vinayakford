<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct() {
	     parent::__construct();
	     $this->load->model('ford_model');
	}
	public function index()
	{
//		$this->load->view('welcome_message');
		$this->login();
	}
	  public function login() {

        if ($this->session->userdata('admin_id')) {
            redirect('employees/', 'refresh');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

        if ($this->input->post()) {
            $row = $this->ford_model->admin_data();
            
            
            if (!empty($row[0])) {
                foreach ($row as $rw) {
                    $admin_id = $rw->id;
                    $admin_name = $rw->username;
                    $type=$rw->type;
                }
                $newdata = array(
                    'username' => $admin_name,
                    'admin_id' => $admin_id,
                    'type'=>$type
                    
                );
                $this->session->set_userdata($newdata);
                
                 
                redirect('employees');
                 
//                $this->load->view('common/header');
//                $this->load->view('admin/restaurant');
//                $this->load->view('common/footer');
            } else {
                $this->session->set_flashdata('error', 'username and password does not match');
              
                $this->load->view('login/login');
               
            }
        } else {
           
            $this->load->view('login/login');
          
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('administrator/login', 'refresh');
    }
}
