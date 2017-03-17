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
        $this->load->model('ford_model', 'ford');
    }

    public function index() {
//		$this->load->view('welcome_message');
        $this->login();
    }

    public function login() {

        if ($this->session->userdata('admin_id')) {
            redirect('customer/search', 'refresh');
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

    public function create() {
        $data['title'] = 'Create';
        $this->load->template('user/create');
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
                    $row = $this->ford->rowUpdate('user', array('password' => md5($new_password)), array('id' => $user_id));
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

    function userCreate() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->input->post('user_id') == "") {
            $this->form_validation->set_rules('email', 'User Name', 'required|valid_email|is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $data['title'] = 'Create';
        } else {
            $data['title'] = 'Update';
            $this->form_validation->set_rules('email', 'User Name', 'required|valid_email');
        }
        $this->form_validation->set_rules('type', 'User Role', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('user_id') == "") {
                $data['title'] = 'Create';
                $this->load->template('user/create', $data);
            } else {
                $form_data = $this->ford->getData('user', 'id,name,username,type', array('id' => $this->input->post('user_id')));
                if (!empty($form_data)) {
                     $data['title'] = 'Update';
                    $data = array('form_data' => $form_data[0], 'user_ids' => $this->input->post('user_id'));
                    $this->load->template('user/create', $data);
                }
            }
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $type = $this->input->post('type');
            $id = $this->input->post('user_id');



            $data = array('name' => $name, 'username' => $username, 'password' => $password, 'type' => $type);
            if ($id > 0) {

                $row = $this->ford->rowUpdate('user', $data, array('id' => $id));
                if ($row) {
                    $this->session->set_flashdata('success', 'User Update Successully');
                } else {
                    $this->session->set_flashdata('msg', 'Something went Wrong');
                }
                redirect('welcome/user', 'redirect');
            } else {
                $row = $this->ford->rowInsert('user', $data);
                if ($row) {
                    $this->session->set_flashdata('success', 'User Creted Successully');
                } else {
                    $this->session->set_flashdata('msg', 'Something went Wrong');
                }
                redirect('welcome/user', 'redirect');
            }
        }
    }

    public function getUser() {
//            $arrData['scripts_to_load'] = array('assets/comman/customer.js');
//        $this->load->template('/customer/search',$arrData);
        $draw = $this->input->get('sEcho');
        $start = intval($this->input->get('iDisplayStart'));
        $length = intval($this->input->get('iDisplayLength'));
        $search = $this->input->get('sSearch');
        $order_temp = $this->input->get('iSortCol_0') ? $this->input->get('iSortCol_0') : 0;
        $order = $this->input->get('mDataProp_' . $order_temp);
        $order_by = $this->input->get('sSortDir_0') ? $this->input->get('sSortDir_0') : '';
        $search = $this->input->get('sSearch');




        if (empty($search))
            $search = $this->input->get('keywords');

        $search_data = array();
        $search_data['keyword'] = $search;

        $search_data['join'] = array(
        );
        $search_data['column'] = array(
            'user.*'
        );
        $this->ford->set_table('user');



        $search_data['columns'] = array('id', 'name', 'username', 'type');
        $total = $this->ford->get_all_common_list(TRUE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        $all_users = array();
        if ($total > 0) {
            $all_users = $this->ford->get_all_common_list(FALSE, $search_data, $length, $start, $order, $order_by, $is_refrence = false, $or_where = "OR");
        }

        $data = array();
//        echo $this->db->last_query();
        foreach ($all_users as $key => $value) {
            $value['name'] = "<a href='" . base_url('welcome/edit/') . $value['id'] . "' >" . $value['name'] . "</a>";

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

    function edit($id = 0) {
        if ($id > 0) {
            $form_data = $this->ford->getData('user', 'id,name,username,type', array('id' => $id));

            if (!empty($form_data)) {
                $data = array('form_data' => $form_data[0], 'user_ids' => $id);
                $data['title'] = 'Update';
                $this->load->template('user/create', $data);
            } else {
                redirect('welcome/create');
            }
        } else {
            redirect('welcome/create');
        }
    }

}
