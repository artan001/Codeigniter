<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of feth_province_model
 *
 * @author Artan.s
 */
class feth_province_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getProvince(){
        $sql = "SELECT * FROM province";
        $query = $this->db->query($sql);
        $query = $query->row();
        return $query;
    }
}
