<?php
class EmployeeDetail extends CI_Model {
 
function getEmployees(){
  $this->db->select("*");
  $this->db->from('employees');
  $query = $this->db->get();
  return $query->result();
}
function getEmployee($id){
  $this->db->select("*");
  $this->db->from('employees');
  $where="id = $id";
  $this->db->where($where);
  $query = $this->db->get();
  return $query->row();
}
 function saveEmployee($params){
    
  $data = array(
        'name' => $params['employee_name'],
        'designation' => $params['employee_designation'],
        'email' => $params['employee_email'],
        'phone' => $params['employee_phone']
      
);

$insert_data=$this->db->insert('employees', $data);
if($insert_data){
    $this->load->helper('url');
    redirect('employees/employeeList', 'refresh');
}
}
 
  function updateEmployee($params){
  $data = array(
        'name' => $params['employee_name'],
        'designation' => $params['employee_designation'],
        'email' => $params['employee_email'],
        'phone' => $params['employee_phone']
      
);
$this->db->where('id',$params['employee_id']);
$update_data=$this->db->update('employees',$data);

if($update_data){
    $this->load->helper('url');
    redirect('employees/employeeList', 'refresh');
}
}
function deleteEmployee($id) {
    $this->db->where('id', $id);
  $delete=  $this ->db ->delete('employees');
  if($delete){
         redirect('employees/employeeList', 'refresh');
  }
}
}
?>
