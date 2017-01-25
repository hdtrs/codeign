<?php

if(!defined('BASEPATH')) exit('Hacking Attempt!');

class M_login extends CI_Model

{

public function __construct()

{

parent::__construct();

}

public function takeUser($username, $password, $status, $level)

{

$this->db->select('*');

$this->db->from('lietotaji');

$this->db->where('username', $username);

$this->db->where('password', $password);

$this->db->where('status', $status);

$this->db->where('level', $level);

$query = $this->db->get();

return $query->num_rows();

}

public function userData($username)

{

$this->db->select('username');

$this->db->select('name');

$this->db->where('username', $username);

$query = $this->db->get('lietotaji');

return $query->row();

}

}

