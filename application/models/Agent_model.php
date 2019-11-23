<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Agent_model extends CI_Model {

    public function login($email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function create($email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function update($id, $email, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function delete($id) {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

}