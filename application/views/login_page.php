<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>THANOOLUK</title>
        <base  href="<?php echo base_url(); ?>">
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

        <!-- Custom styles for this template -->
        <!--<link href="assets/styles/bootstrap4/custom/shop-homepage.css" rel="stylesheet">-->
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/custom/styles.css">
    </head>
    <body>
        <div class="container">
            <h1 class="page-header text-center">CodeIgniter Ajax Login using jQuery</h1>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="login-panel panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form >
                                <!--<form method="post" action="login_controller/login_Test">-->
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" id="username">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" id="password">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block" id="login"><span id="logText">LOGIN</span></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
                        <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                        <span id="message"></span>
                    </div>	
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
            $('#login').on('click', function () {


                $.ajax({
                    url: "login_controller/login_Test",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "username": username,
                        "password": password,
                    }, success: function (resp) {
                        console.log(resp);
                        if (resp.result == true) {
//                            window.location.replace(resp);  
                            alert('ok');
                        } else {
//                            window.location = "test_c";
                            alert('NO');
                        }
                    }, error: function (error) {
                        console.log(error);

                    }
                })

            });
        });
        </script>
    <!--<script src="assets/allaction_js/login.js"></script>-->
        <script src="assets/js/custom/jquery-3.3.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!--<script src="assets/styles/bootstrap4/popper.js"></script>-->
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
