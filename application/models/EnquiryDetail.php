<?php
class EnquiryDetail extends CI_Model {
 
function getFollowUp(){
  $this->db->select("eq.*,e.name as employee_name");
  $this->db->from('enquiry eq');
  $this->db->join('employees e', 'eq.employee_id = e.id', 'left');
  $query = $this->db->get();
  return $query->result();
}
function getEnquiry($id){
  $this->db->select("*");
  $this->db->from('enquiry');
  $where="id = $id";
  $this->db->where($where);
  $query = $this->db->get();
  return $query->row();
}
 function saveEnquiry($params){
    
  $data = array(
        'name' => $params['enquiry_name'],
        'email' => $params['enquiry_email'],
        'employee_id' => $params['enquiry_employee_id'],
        'phone' => $params['enquiry_phone'],
        'address' => $params['enquiry_address'],
        'reason' => $params['enquiry_reason'],
        'date' => $params['enquiry_date'],
       'taken' => $params['enquiry_taken']
      
);

$insert_data=$this->db->insert('enquiry', $data);
if($insert_data){
    $this->load->helper('url');
    redirect('/enquiry/followup', 'refresh');
}
}
// 
  function updateEnquiry($params){
   $data = array(
        'name' => $params['enquiry_name'],
        'email' => $params['enquiry_email'],
        'employee_id' => $params['enquiry_employee_id'],
        'phone' => $params['enquiry_phone'],
        'address' => $params['enquiry_address'],
        'reason' => $params['enquiry_reason'],
        'date' => $params['enquiry_date'],
       'taken' => $params['enquiry_taken']
      
);
$this->db->where('id',$params['enquiry_id']);
$update_data=$this->db->update('enquiry',$data);

if($update_data){
    $this->load->helper('url');
    redirect('enquiry/followup', 'refresh');
}
}
function deleteEnquiry($id) {
    $this->db->where('id', $id);
  $delete=  $this ->db ->delete('enquiry');
  if($delete){
         redirect('enquiry/followup', 'refresh');
  }
}
}
?>
