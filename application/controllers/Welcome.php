<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->headadd = 'layout/home/head_home';
        $this->page = 'layout/home/page_home';
//        $this->modaladd = ['layout/modal/modal_register']; ถ้ามี modalที่ต้องการเพิ่ม ให้เพิ่มเป็นรูปแบบ array ถ้าไม่มีให้ทำแบบด้านล่าง
        $this->modaladd =[];
        $this->scriptadd = 'layout/home/down_home';
        $this->dataresult = TEMPLATE_A; //defind มาจาก my_constants ซึ่ง custom template เองใน view/template/''''
        $this->newlayout(); // เรียก layout มาจาก MY_Controller ซึ่งกำหนด page  และ template เอง
//        $result = $this->Login_Model->usertype();
//        if ($result->num_rows() > 0) {
//            $data['dbrow'] = $result->result();
//        } else {
//            $data['dbrow'] = null;
//        }
//        $result->free_result();
//        $data['header'] = 'layout/header';
//        $data['page'] = 'home';
//        $data['footer'] = 'layout/footer';
//        $data['down'] = 'layout/down_home';
//        $data['modal'] = ['layout/modal/modal_login',
//                          'layout/modal/modal_register'];
//        $this->load->view(TEMPLATE_WELCOME, $data);
    }

}
