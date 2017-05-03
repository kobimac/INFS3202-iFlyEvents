<?php
//check for the existence of session data, if none, create one.
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
if (isset($_POST['user_name']))
{
    $_SESSION['sess_logged_in']=1;
}
?>


<!-- HTML 5 Declaration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Javascript Library/plugin Declarations -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script><!-- JQuery -->
    <script src="js/parsley.js"></script><!-- Parsley (input validation) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/Multiform.js"></script><!-- Script to allowTab switching between login & Registration forms -->
    <script type="text/javascript" src="js/Register_user.js"></script><!--Register New User, Validate no duplicate username -->

    <!-- Stylesheet Declarations -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Bootstrap CDN -->
    <link href="css/Multiform.css" rel="Stylesheet" type="text/css" /><!-- local stylesheet -->


</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right" id="loginbutton">
            <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Log-in</a></li>
        </ul>
    </div>
</nav>



<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="col-md-12">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="modal-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Login Form -->
                            <form id="login-form" class="form-horizontal" action="#"
                                  method="post" role="form" style="display: block;">
                                <!-- User Name -->
                                <div class="form-group">
                                    <div class="col-xs-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="username" placeholder="Username *" type="text" class="form-control">
                                        </div>
                                        <div id="user_nameErrorContainer"></div>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Password -->
                                    <div class="col-xs-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input name="password" placeholder="Password *" class="form-control" type="password">
                                        </div>
                                        <div id="pwdErrorContainer"></div>
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="form-control" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <!-- Submit Button -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Registration Form -->
                            <form id="register-form" class="form-horizontal"  method="post" role="form" style="display: none;">

                                <!-- First and Last name on same line -->
                                <div class="form-group">

                                    <!-- First Name -->
                                    <div class="col-xs-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="first_name" placeholder="First Name (required)" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-xs-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="last_name" placeholder="Last Name (required)" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>

                                <!-- User Name -->
                                <div class="form-group">
                                    <div class="col-xs-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="user_name" placeholder="Username (required)" class="form-control" type="text">
                                        </div>
                                        <div id="UsernameErrorContainer"></div>
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <div class="col-xs-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="email" class="form-control" placeholder="E-Mail Address (required)"  type="text"
                                                   required
                                                   data-parsley-type="email"
                                                   data-parsley-errors-container="#EmailErrorContainer"
                                                   data-parsley-trigger="keyup"
                                                   data-parsley-required-message="A valid email address is required">
                                        </div>
                                        <div id="EmailErrorContainer"></div>
                                    </div>
                                </div>


                                <!-- Password and confirm password on the same line -->
                                <div class="form-group">
                                    <!-- Password -->
                                    <div class="col-xs-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input name="user_password" placeholder="Password" class="form-control" type="password">
                                        </div>
                                        <div id="PasswordErrorContainer"></div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-xs-6 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input name="confirm_password" placeholder="Confirm Password" class="form-control" type="password">
                                        </div>
                                        <div id="ConfPasswordErrorContainer"></div>
                                    </div>
                                </div>

                                <!-- submit button -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Parsly Validation script (jquery) -->
<script type="text/javascript">
    $('#register-form').parsley();
</script>
</body>
</html>