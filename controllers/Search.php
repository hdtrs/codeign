<?php 
Class Search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
   
    }
    public function index(){
        $this->load->view('search_keyword');
    }

    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->mymodel->search($keyword);
        $this->load->view('result_view',$data);
    }

}

?>