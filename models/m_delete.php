<?php
class m_delete extends CI_Model{
 public function __construct()

{

parent::__construct();

}   

// atlasa visus no datubaazes
function show_users(){
$query = $this->db->get('lietotaji');
$query_result = $query->result();
return $query_result;
}

// atlasa lietotaaju datu baazee 
function show_user_id($data){
$this->db->select('*');
$this->db->from('lietotaji');
$this->db->where('id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}

// dzeeshana
function delete_user_id($id){
$this->db->where('id', $id);
$this->db->delete('lietotaji');
}
}
?> 