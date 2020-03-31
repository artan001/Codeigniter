<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_login
 *
 * @author Artan.s
 */
class Test_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $this->load->view('testv');
    }
    public function login_test() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->login_model->user_login($username, $password);

        if ($query) {
            $chk = $query->type;
            if ($chk == '1') {
                $this->session->set_userdata('user', $chk);
//                echo $chk . "admin";
//                echo '<div class="button banner_button"><a href="../test_login/logout">LOGOUT</a></div>';
                $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง1 \n";
            } else {
                $this->session->set_userdata('user', $chk);
                $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง2 \n";
//                echo $chk . "user";
//                echo '<div class="button banner_button"><a href="../test_login/logout">LOGOUT</a></div>';
            }
            $obj["result"] = true;
        } else {
            $this->session->set_userdata('user', 'null');
//            echo "ไม่มีในระบบ";
//            echo '<div class="button banner_button"><a href="../test_login/logout">LOGOUT</a></div>';
            $obj["result"] = false;
            $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง \n";
        }
        echo json_encode($obj);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/test_login');
        exit;
    }

}
