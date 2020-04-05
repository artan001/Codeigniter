<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_model
 *
 * @author Artan.s
 */
class Login_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' ";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function user_login($username, $password) {
        $sql = "SELECT * FROM user WHERE Username = '$username'   AND Password = '$password' ";
        $query = $this->db->query($sql);
        return $query->row();
    }
    public function usertype(){
        $sql = "SELECT * FROM user_type ";
        $query = $this->db->query($sql);
        return $query;
    }

}
