<?php

if(!defined('BASEPATH')) exit('Hacking Attempt!');

class Delete extends CI_Controller{

public function __construct()
{
parent::__construct();
$this->load->model('m_delete');
}

public function index()
        {
redirect('delete/show_user_id');
        }
// Funkcija,kas atrod visus lietotaajus datu baazee

public function show_user_id() 
{
    if($this->session->userdata('isLogin') == FALSE)
        {
redirect('login/login_form');
        }else
    {
$id = $this->uri->segment(3);
$data['users'] = $this->m_delete->show_users();
$data['single_user'] = $this->m_delete->show_user_id($id);
$this->load->view('deleteview', $data);
}
}


// atlasa lietotaaja datus,kurus dzeest
public function delete_user_id() 
{
$id = $this->uri->segment(3);
$this->m_delete->delete_user_id($id);
$this->show_user_id();
}
}
?>

