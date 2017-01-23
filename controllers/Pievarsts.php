<?php
class Pievarsts extends CI_Controller {
    
    public function index()
    {
        //validaacija
        $rules = array(
            "Vards" => array(
                "field"=>"Vards",
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
            
            "Lietotajvards" => array(
                "field"=>"Lietotajvards",
                "label"=>"Lietotajvards",
                "rules"=>"required"
            ),
                
            "Parole" => array(
                "field"=>"Parole",
                "label"=>"Parole",
                "rules"=>"required"
            ),
            
            "pass_conf" => array(
                "field"=>"pass_conf",
                "label"=>"Repeat Password",
                "rules"=>"required|matches[Parole]"
            )
        );
        //set
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run()!=true){
            $this->load->view("arsts");
        } else {
            //Datu baazes inputs
            
            $data=array(
                'Vards'=> $this->input->post('Vards'),
                'Uzvards'=> $this->input->post('Uzvards'),
                'Amats'=> $this->input->post('Amats'),
                'Lietotajvards'=> $this->input->post('Lietotajvards'),
                'Parole'=>md5( $this->input->post('Parole'))
                );
            $this->db->insert('arsti', $data);
            
            $this->load->view('Success',$data);
            
                 }
            }

        }

 
       
