<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('ford_model','ford');
    }

    public function index() {
//		$this->load->view('welcome_message');
        $this->login();
    }

    public function login() {

        if ($this->session->userdata('admin_id')) {
            redirect('employees/', 'refresh');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/login');
        } else {


            if ($this->input->post()) {
                $row = $this->ford->admin_data();


                if (!empty($row[0])) {
                    foreach ($row as $rw) {
                        $name = $rw->name;
                        $admin_id = $rw->id;
                        $admin_name = $rw->username;
                        $type = $rw->type;
                    }
                    $newdata = array(
                        'username' => $admin_name,
                        'name' => $name,
                        'admin_id' => $admin_id,
                        'type' => $type
                    );
                    $this->session->set_userdata($newdata);


                    redirect('customer/search', 'refresh');

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
    }

    public function user() {
        $this->load->template('user/index');
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('welcome/login', 'refresh');
    }

    public function changepassword() {


        $this->load->template('profile/change_password');
    }

    public function updatepassword() {
        if ($this->input->post('user_id')) {
            $this->form_validation->set_rules('old_password', 'Old Password', 'required');
            $this->form_validation->set_rules('new_password', 'New Password', 'required');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->template('profile/change_password');
            } else {
                $old_password = $this->input->post('old_password');
                $new_password = $this->input->post('new_password');
                $user_id = $this->input->post('user_id');
                $row = $this->ford->getRowCount('user', '*', array('password' => md5($old_password), 'id' => $user_id));
                
                if ($row != 0) {
                    $row = $this->ford->rowUpdate('user', array('password' => md5($new_password)),array('id' => $user_id));
                    if ($row) {
                        $this->session->set_flashdata('success', 'Password Successfully Changed');
                    } else {
                        $this->session->set_flashdata('msg', 'Password does not changed');
                    }
                    redirect('welcome/changepassword', 'redirect');
                } else {
                     $this->session->set_flashdata('msg', 'Old Password does not Mathced');
                    $this->load->template('profile/change_password');
                }
            }
        } else {
            $this->load->template('profile/change_password');
        }
    }

    function old_password($old_password, $user_id) {
        
    }

}
