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
        $this->modaladd = [];
        $this->page = 'layout/product/page_product';
        $this->dataresult = TEMPLATE_PRODUCT; 
        $this->layout();
    }

}
