<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * custom constant file 
 * Create by powerbeer
 * 
 */ 

define('UPLOAD_PATH',"userdata" .DIRECTORY_SEPARATOR);

define('FILE_ATTACH_PATH',"file_attach" .DIRECTORY_SEPARATOR);


define('LOG_WITH_SYSTEM', 1); //   errors
define('LOG_WITH_USER', 2); //   errors
define('TABLE_LOG','PCC_AUTHEN_LOG'); //Table Log
//template
define('TEMPLATE_A', 'template/TEMPLATE'); //  หน้าหลักเรียกใช้ได้หมด แต่ต่างกับข้างล่างคือ ต้องกำหนอดส่วนของ TOP กับ DOWN ที่เรียกสคริป

define('TEMPLATE_WELCOME', 'template/TEMPLATE-HOME'); //  หน้าแรก
define('TEMPLATE_SHOP', 'template/TEMPLATE-SHOP'); //   หน้า shop
define('TEMPLATE_PRODUCT', 'template/TEMPLATE-PRODUCT'); //   หน้าสินค้า
define('TEMPLATE_CART', 'template/TEMPLATE-CART'); // 
define('TEMPLATE_BLOG', 'template/TEMPLATE-BLOG'); // 
define('TEMPLATE_BLOGSINGLE', 'template/TEMPLATE-BLOGSINGLE'); // 
define('TEMPLATE_CONTACT', 'template/TEMPLATE-CONTACT'); // 
define('TEMPLATE_REGULAR', 'template/TEMPLATE-REGULAR'); //





?>