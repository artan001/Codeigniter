<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Controller
 *
 * @author Artan.s
 */
class Login_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $this->headadd = 'layout/home/head_home';
        $this->page = 'home';
//        $this->modaladd = ['layout/modal/modal_register']; ถ้ามี modalที่ต้องการเพิ่ม ให้เพิ่มเป็นรูปแบบ array ถ้าไม่มีให้ทำแบบด้านล่าง
        $this->modaladd = [];
        $this->scriptadd = 'layout/home/down_home';
        $this->dataresult = TEMPLATE_A; //defind มาจาก my_constants ซึ่ง custom template เองใน view/template/''''
        $this->newlayout(); // เรียก layout มาจาก MY_Controller ซึ่งกำหนด page  และ template เอง
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->login_model->user_login($username, $password);
        if ($query) {
            $status = $query->status;
            if ($status == "1") 
            {
                $chk = $query->type;
                if ($chk == '1') {
                    $this->session->set_userdata('user', $chk);
                } else {
                    $this->session->set_userdata('user', $chk);
                }
                $obj["result"] = true;
            } 
            elseif ($status == "2") 
            {
                $obj["result"] = false;
                $obj["message"] = "- กรุณายืนยันตัวตน \n";
            }
            else 
            {
                $obj["result"] = false;
                $obj["message"] = "- กรุณายืนยันตัวตน \n";
            }
        } else {
            $this->session->set_userdata('user', 'null');
            $obj["result"] = false;
            $obj["message"] = "- กรุณาตรวจสอบ username กับ password ให้ถูกต้อง \n";
        }
        echo json_encode($obj);
    }

    public function chkUserSession() {
        $chk = $this->seccion->userdata('user');
//        ตรวจสอบ session
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/', 'refresh');
        exit;
    }

}
