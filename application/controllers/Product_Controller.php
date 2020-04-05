<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_Controller
 *
 * @author Artan.s
 */
class Product_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
//        เรียก TEMPLATE แบบแยก
//        $this->modaladd = [];
//        $this->page = 'layout/product/page_product';
//        $this->dataresult = TEMPLATE_PRODUCT; 
//        $this->layout();
        
        // เรียก TEMPLATE_ALL
        $this->headadd = 'layout/product/head_product';
        $this->page = 'layout/product/page_product';
//        $this->modaladd = ['layout/modal/modal_register']; ถ้ามี modalที่ต้องการเพิ่ม ให้เพิ่มเป็นรูปแบบ array ถ้าไม่มีให้ทำแบบด้านล่าง
        $this->modaladd = [];
        $this->scriptadd = 'layout/product/down_product';
        $this->dataresult = TEMPLATE_A; //defind มาจาก my_constants ซึ่ง custom template เองใน view/template/''''
        $this->newlayout(); 
    }

}
