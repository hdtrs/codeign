<?php
if(!defined('BASEPATH')) exit('Hacking Attempt:!');

class Home extends CI_Controller

{

public function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('m_login');

}

public function index()

{

if($this->session->userdata('isLogin') == FALSE)

{

redirect('login/login_form');

}else

{

$this->load->model('m_login');

$user = $this->session->userdata('username');

$data['level'] = $this->session->userdata('level');

$data['user'] = $this->m_login->userData($user);

$this->load->view('home', $data);

}

}

public function arsts() 
{
    $data['title']="REKT";
        if ($this->session->userdata('isLogin')==FALSE)
        {
          $data['message_access']="you are not permitted to acces this page";  
        }  else {
        echo "You can view this page"; 
        }
        $this->load->view('arsts',$data);

}        

}


?>

