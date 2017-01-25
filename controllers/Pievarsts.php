<?php
class Pievarsts extends CI_Controller 
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
        if($this->session->userdata('isLogin') == FALSE)

{

redirect('login/login_form');

}else
    
        


        //validaacija
        $rules = array(
            "Vards" => array(
                "field"=>"name",
                "label"=>"Vards",
                "rules"=>"required"
            ),
            
            "Uzvards" => array(
                "field"=>"Uzvards",
                "label"=>"Uzvards",
                "rules"=>"required"
            ),
                
            "Amats" => array(
                "field"=>"Amats",
                "label"=>"Amats",
                "rules"=>"required"
            ),
            
            "username" => array(
                "field"=>"username",
                "label"=>"username",
                "rules"=>"required"
            ),
                
            "password" => array(
                "field"=>"password",
                "label"=>"password",
                "rules"=>"required"
            ),
            
            "pass_conf" => array(
                "field"=>"pass_conf",
                "label"=>"Repeat Password",
                "rules"=>"required|matches[password]"
            )
        );
        //set
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run()!=true){
            $this->load->view("arsts");
        } else {
            //Datu baazes inputs
            $this->load->model('insert');
            $data=array(
                'name'=> $this->input->post('name'),
                'Uzvards'=> $this->input->post('Uzvards'),
                'Amats'=> $this->input->post('Amats'),
                'username'=> $this->input->post('username'),
                'password'=>md5( $this->input->post('password')),
                'status'=> '1',
                'level'=>'1'
                
                );
            //data uz modeli
            $this->insert->form_insert($data);
            //skats
            
            
            $this->load->view('Success',$data);
            
            
                 }
            }

        }

 
       
