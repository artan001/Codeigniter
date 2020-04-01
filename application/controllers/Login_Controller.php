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
class Login_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $data = array();
        $data['top'] = 'layout/home/head_home';
        $data['header'] = 'layout/header';
        $data['page'] = 'home';
        $data['footer'] = 'layout/footer';
        $data['down'] = 'layout/down_home';
        $data['modal'] = 'layout/home/modal_home';
        $this->load->view(TEMPLATE_WELCOME, $data);
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->login_model->user_login($username, $password);

        if ($query) {
            $chk = $query->type;
            if ($chk == '1') {
                $this->session->set_userdata('user', $chk);
                $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง1 \n";
            } else {
                $this->session->set_userdata('user', $chk);
                $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง2 \n";
            }
            $obj["result"] = true;
        } else {
            $this->session->set_userdata('user', 'null');
            $obj["result"] = false;
            $obj["message"] = "- กรุณตรวจสอบ username กับ password ให้ถูกต้อง \n";
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
