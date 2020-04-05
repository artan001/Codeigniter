<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

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
        $this->page = 'home';
//        $this->modaladd = ['layout/modal/modal_register']; ถ้ามี modalที่ต้องการเพิ่ม ให้เพิ่มเป็นรูปแบบ array ถ้าไม่มีให้ทำแบบด้านล่าง
        $this->modaladd =[];
        $this->scriptadd = 'layout/home/down_home';
        $this->dataresult = TEMPLATE_A; //defind มาจาก my_constants ซึ่ง custom template เองใน view/template/''''
        $this->newlayout();
    }

}
