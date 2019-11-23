<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Admin_model extends CI_Model {

    public function login($email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

}