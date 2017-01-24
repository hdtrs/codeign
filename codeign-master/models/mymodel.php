<?php

if(!defined('BASEPATH')) exit('Hacking Attempt!');
Class Mymodel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }

    function search($keyword)
    {
        $this->db->where('Lietotajvards',$keyword);
        $query  =   $this->db->get('arsti');
        return $query->result();
    }
}   ?>
