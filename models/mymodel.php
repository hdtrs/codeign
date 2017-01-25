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
        $this->db->where('username',$keyword);
        $query  =   $this->db->get('lietotaji');
        return $query->result();
    }
}   ?>

