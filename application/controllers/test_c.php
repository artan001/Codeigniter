<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_c
 *
 * @author Artan.s
 */
class test_c extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('test');
    }
    
    public function index(){
        $data = array();
        $data['name'] = $this->test->test1();
        $this->load->view('testv',$data);
        
    }
}
