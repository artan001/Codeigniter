<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Artan.s
 */
class test extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function test1() {
        $sql = "SELECT * FROM user";
        $query = $this->db->query($sql);
        return $query->row();
    }
}
