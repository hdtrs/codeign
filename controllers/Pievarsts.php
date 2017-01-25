<?php
class Pievarsts extends CI_Controller {
    
    public function index()
    {
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
            
            $data=array(
                'name'=> $this->input->post('name'),
                'Uzvards'=> $this->input->post('Uzvards'),
                'Amats'=> $this->input->post('Amats'),
                'username'=> $this->input->post('username'),
                'password'=>md5( $this->input->post('password')),
                'status'=> '1',
                'level'=>'1'
                
                );
            $this->db->insert('lietotaji',$data);
            
            $this->load->view('Success',$data);
            
            
                 }
            }

        }

 
       
