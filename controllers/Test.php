<?php
if(!defined('BASEPATH')) exit('Hacking Attempt:!');

class Test extends CI_Controller

{

public function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('m_login');

}

public function index()

{

    



$data['level'] = $this->session->userdata('level');


$this->load->view('tests', $data);
 



}

    }



?>

