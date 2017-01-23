<?php
class Auth extends MY_Controller
{
    function _construct()
    {
        parent::_construcct();
    }
    function signup()
    {
    $data['title']= "SIGN UP";
    $data['content_view']="Auth/signup_v";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

