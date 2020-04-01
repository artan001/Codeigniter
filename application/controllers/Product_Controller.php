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
class Product_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $data['header'] = 'layout/header';
        $data['page'] = 'layout/product/page_product';
        $data['footer'] = 'layout/footer';
        $data['modal'] = ['layout/modal/modal_login',
                          'layout/modal/modal_register'];
        $this->load->view(TEMPLATE_PRODUCT, $data);
    }

}
