<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>testlogin</title>
        <base  href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="THANOOLUK shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
        <script src="assets/jquery/jquery-3.3.1.js"></script>
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
                            <form method="post" action="test_login/login_test">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="username" type="text" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block"><span id="logText"></span></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
                        <button type="button" class="close" id="clearMsg"><span aria-hidden="true">LOGIN</span></button>
                        <span id="message"></span>
                    </div>
                    <a class="dropdown-toggle" data-toggle="modal" data-target="#modal-login" href="#">
                        เข้าสู่ระบบ <i class="fa fa-user fa-fw"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">           
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="username" id ="username" name="username">

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="password" id="password" name="password">
                                </div>
                                <div class="col-md-12">
                                    <div class="alert alert-danger" style="display:none" role="alert" id="message-alert-login"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center ">
                                        Don't have an account?<a href="#">Sign Up</a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <!--<input type="submit" value="Login" id="btn-login1" class="btn float-right login_btn">-->
                            <button type="button" id="btn-login" class="btn float-right login_btn">Login</button>
                            <button type="button" class="btn float-right login_btn" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="message-title"></h4>
                    </div>
                    <div class="modal-body" id="message-content">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    </div>
                </div>
            </div>
        </div>
        <script >
            $(document).ready(function () {
                var title = getUrlParameter('title');
                var message = getUrlParameter('message');
                if (title !== undefined && message !== undefined) {
                    $('#modal-message').modal('show');
                    $('#message-title').text(title);
                    $('#message-content').text(message);
                }
            })

            function getUrlParameter(sParam) {
                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                        sURLVariables = sPageURL.split('&'),
                        sParameterName,
                        i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            }
            $('#btn-login').on('click', function () {
                var message = "";
                displayError(false, "");

                $('#message-alert-login').hide();
                var username = $('#username').val();
                var password = $('#password').val();

                if (username == '') {
                    message = message.concat("- กรุณากรอก USERNAME <br>");
                }
                if (password == '') {
                    message = message.concat("- กรุณากรอก PASSWORD <br>");
                }
                if (message != '') {
                    displayError(true, message);
                    return;
                }

                $.ajax({
                    url: "test_login/login_test",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "username": username,
                        "password": password,
                    }, success: function (resp) {
                        console.log(resp);
                        if (resp.result == true) {
                            window.location = "welcome";
                        } else {
                            displayError(true, resp.message);
                        }
                    }, error: function (error) {
                        console.log(error);

                    }
                })

            });
            function displayError(show, message) {
                //show ? $('#alert').show() : $('#alert').hide();
                if (show) {
                    $('#message-alert-login').show();
                } else {
                    $('#message-alert-login').hide();
                }
                $('#message-alert-login').html(message);
            }
        </script>

        <script src="assets/jquery/jquery-3.3.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!--<script src="assets/styles/bootstrap4/popper.js"></script>-->
        <script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
    </body>
</html>
