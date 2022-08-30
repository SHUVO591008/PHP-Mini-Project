
<!--confic.php Connection-->
<?php
include 'confic.php';
?>
<!--confic.php Connection End-->

<!--css header Connection-->
<?php
include 'css_layout/header.php';
?>
<!--css headerConnection End-->


<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div style="height: 789px;" class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                            <p class="lead">Signup your account</p>
                        </div>
                        <form class="form-auth-small" method="post" action="signup_core.php">
                            <div class="form-group">
                                <label for="fName" class="control-label sr-only">First Name</label>
                                <input type="text" class="form-control" id="signin-email" name="fName" placeholder="First Name" >
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="lName" class="control-label sr-only">Last Name</label>
                                <input type="text" class="form-control" id="signin-email" name="lName" placeholder="Last ">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }elseif(isset($_REQUEST['exit'])){
                                        echo "This email already registation.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="control-label sr-only">Mobile</label>
                                <input type="number"  class="form-control" id="mobile" name="mobile" placeholder="Number">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }elseif(isset($_REQUEST['lenth'])){
                                        echo "password must be 6 character.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="conform-password" class="control-label sr-only">Conform Password</label>
                                <input type="password" class="form-control" id="signin-password" name="cnf-pwd" placeholder="Conform Password">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }elseif(isset($_REQUEST['pwderror'])){
                                        echo "Password Don't Match.";
                                    }

                                   
                                    ?>
                                </span>

                            </div>

                            <div class="form-group">
                                <label for="university" class="control-label sr-only">University</label>
                                <input type="text" class="form-control" id="" name="university" placeholder="University">
                                <span style="color: red">
                                    <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "Please file out this field.";
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Signup</button>
                            <div class="bottom">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Free Bootstrap dashboard template</h1>
                        <p>by The Develovers</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->


<?php
include 'css_layout/footer.php';
?>