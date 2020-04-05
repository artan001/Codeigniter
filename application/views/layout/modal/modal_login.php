
<!-- Modal Login-->

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
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" for="usertype">TYPE</span>
                            </div>
                            <select class="form-control" id="usertype">
                              <option selected>-SELECT-</option>
                              
                              <?php foreach ( $dbrow as $key ): ?>
                              <?php echo'<option value = "'.$key->ID . '">' . $key->type_name .'</option>'; ?>                             
                              <?php endforeach; ?>
                              <!--<option value="1">ADMIN</option>-->
                              <!--<option value="2">CUSTOMER</option>-->
                              <!--<option value="3">EMPLOYEE</option>-->
                            </select>
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

<!--End Modal Login -->

<!--Script Login-->

<script src="assets/allaction_js/login.js"></script>

<!--End Script Login-->