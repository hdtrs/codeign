<?php
if(!defined('BASEPATH')) exit('Hacking Attempt!');

class insert extends CI_Model{
function __construct() {
parent::__construct();
}

function form_insert($data){
// ievietosana datu baazee
$this->db->insert('lietotaji',$data);
}
}
?>