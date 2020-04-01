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
class Shop_Controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
       $data = array();
       $data['header'] = 'layout/header';
       $data['page'] = 'layout/shop/page_shop';
       $data['footer'] = 'layout/footer';
       $this->load->view(TEMPLATE_SHOP,$data);
    }
}
