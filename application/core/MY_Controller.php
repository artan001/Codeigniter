<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Artan.s
 */
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function chkuser(){
        
    }

    var $data = array();
    public function layout() {
        $this->load->model('Login_Model');

        $result = $this->Login_Model->usertype();
        if ($result->num_rows() > 0) {
            $this->data['dbrow'] = $result->result();
        } else {
            $this->data['dbrow'] = null;
        }
        $result->free_result();
        $this->data['header'] = 'layout/header';
        $this->data['page'] = $this->page;
        $this->data['footer'] = 'layout/footer';
//        $this->data['down'] = 'layout/down_home';
        $this->data['modal'] = ['layout/modal/modal_login',
                                'layout/modal/modal_register'];
        $this->data['modaladd'] = $this->modaladd;
        $this->load->view($this->dataresult, $this->data);
    }

//    TEST NEW LAYOUT
    public function newlayout() {
        $this->load->model('Login_Model');
        $this->data['headadd'] = $this->headadd; //เพิ่ม link หรือscript ส่วนของhead
        
        $result = $this->Login_Model->usertype();
        if ($result->num_rows() > 0) {
            $this->data['dbrow'] = $result->result();
        } else {
            $this->data['dbrow'] = null;
        }
        $result->free_result();
        $this->data['header'] = 'layout/header';
        $this->data['page'] = $this->page;
        $this->data['footer'] = 'layout/footer';
//        $this->data['down'] = 'layout/down_home';
        $this->data['modal'] = ['layout/modal/modal_login',
                                'layout/modal/modal_register'];
        $this->data['modaladd'] = $this->modaladd;
        $this->data['scriptadd'] = $this->scriptadd; //เพิ่ม script ส่วนของscript ท้าย body
        $this->load->view($this->dataresult, $this->data);
    }

}
