<?php $this->load->view('includes/admin_tophead.php');?>
<body>
        <div class="single-widget-container">
            <section class="widget login-widget">
                <header class="text-align-center">
                    <h4>Login to your account</h4>
              </header>
                <div class="body">
                    <?php echo form_open('ouradminmanage/userLogin'); ?>
                        <fieldset>
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input id="email" type="email" name="username" value="<?php echo set_value('username'); ?>" 
                                    class="form-control input-lg input-transparent" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>" 
                                    class="form-control input-lg input-transparent" placeholder="Your Password">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-lg btn-danger">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Sign In</small>                            </button>
                          <a class="forgot" href="#">Forgot Username or Password?</a>
                        </div>
                    <?php echo form_close();?>
                </div>
                <footer>
                    <div class="facebook-login">
                        <a href="index-2.html"><span><i class="fa fa-facebook-square fa-lg"></i> LogIn with Facebook</span></a>
                    </div>
                </footer>
            </section>
        </div>
<?php $this->load->view('includes/admin_footer.php');?>