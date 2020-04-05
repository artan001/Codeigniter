<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shop_Controller
 *
 * @author Artan.s
 */
class Shop_Controller extends MY_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
//       $data = array();
//       $data['header'] = 'layout/header';
//       $data['page'] = 'layout/shop/page_shop';
//       $data['footer'] = 'layout/footer';
//       $data['modal'] = ['layout/modal/modal_login',
//                          'layout/modal/modal_register'];
//       $this->load->view(TEMPLATE_SHOP,$data);
           // เรียก TEMPLATE_ALL
        $this->headadd = 'layout/shop/head_shop';
        $this->page = 'layout/shop/page_shop';
//        $this->modaladd = ['layout/modal/modal_register']; ถ้ามี modalที่ต้องการเพิ่ม ให้เพิ่มเป็นรูปแบบ array ถ้าไม่มีให้ทำแบบด้านล่าง
        $this->modaladd = [];
        $this->scriptadd = 'layout/shop/down_shop';
        $this->dataresult = TEMPLATE_A; //defind มาจาก my_constants ซึ่ง custom template เองใน view/template/''''
        $this->newlayout(); 
    }
}
