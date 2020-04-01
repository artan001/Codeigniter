<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>HOME</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="THANOOLUK shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
        <link href="assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">

        <!-- jQuery -->
        <script src="assets/jquery/jquery-3.3.1.js"></script>

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/custom/login-styles.css">
    </head>
    <body>
        <div class="super_container">
            
            <?php
            $this->load->view("/" . $header);
            $this->load->view("/" . $page);
            $this->load->view("/" . $footer);            
            foreach ( $modal as $value){
                $this->load->view("/" . $value);
            }
            ?>
            
        </div>
        <!--Jquery-->
        <script src="assets/jquery/jquery-3.3.1.min.js"></script>
        
        <!--Bootstrap-->
        <script src="assets/styles/bootstrap4/popper.js"></script>
        <script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
        
        
        <script src="assets/plugins/greensock/TweenMax.min.js"></script>
        <script src="assets/plugins/greensock/TimelineMax.min.js"></script>
        <script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="assets/plugins/greensock/animation.gsap.min.js"></script>
        <script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="assets/plugins/slick-1.8.0/slick.js"></script>
        <script src="assets/plugins/easing/easing.js"></script>
        <script src="assets/js/custom/custom.js"></script>
    </body>
</html>
