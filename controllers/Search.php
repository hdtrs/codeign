<?php 
if(!defined('BASEPATH')) exit('Hacking Attempt:!');

Class Search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
        
   
    }
    public function index(){
         if($this->session->userdata('isLogin') == FALSE)

{

redirect('login/login_form');

}else
    
        $this->load->view('search_keyword');
    }

    function search_keyword()
    {
        $keyword    =     $this->input->post('keyword');
        $data['results'] =$this->mymodel->search($keyword);
        $this->load->view('result_view',$data);
    }

}

?>