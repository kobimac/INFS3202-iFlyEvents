<?php
if (isset($_SESSION['username'])!="")
{
    header("Location:index.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kobi McKerihan">

    <title>iFly Downunder Events</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Bootstrap CDN -->

     <link href="css/Multiform.css" rel="Stylesheet" type="text/css" /><!-- local stylesheet -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- jQuery library
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    -->

    <!-- Javascript Library/plugin Declarations -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script><!-- JQuery -->
    <script src="js/parsley.js"></script><!-- Parsley (input validation) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/Multiform.js"></script><!-- Script to allowTab switching between login & Registration forms -->
    <script type="text/javascript" src="js/Register_user.js"></script><!--Register New User, Valiate no duplicate username -->
    <script type="text/javascript" src="js/user_login.js"></script><!--Register New User, Valiate no duplicate username -->
    <!-- Stylesheet Declarations -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand page-scroll" href="#page-top"> iFly Downunder Events</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="#page-top">Home</a></li>
        <li><a class="page-scroll" href="#events">Events</a></li>
        <li><a class="page-scroll" href="#gallery">Gallery</a></li>
        <li><a class="page-scroll" href="#help">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="loginbutton">
          <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up/ Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Header -->
    <header id="top" class="header" class="fullscreen">
    </header>

    <!-- Events -->
    
    <section class="no-padding" id="events" >
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/1.jpg" class="img-responsive" alt="">
                </div>
            
                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/2.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/3.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/4.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/5.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-sm-4 col-sm-6">
                        <img src="img/events/6.jpg" class="img-responsive" alt="">
                </div>

            </div>
        </div>
            
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>iFly Competitive Events</h2>
                <a href="events.html" class="btn btn-default btn-xl sr-button">View Events</a>
                <a href="dropdown.php" class="btn btn-default btn-xl sr-button">View Event Results</a>
                <a href="gallery.html" class="btn btn-default btn-xl sr-button">View Event Gallery</a>
            </div>
        </div>

    </aside>

    <!-- Gallery -->
    <div id = "gallery" class="content-section">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/gallery/1.jpg" alt="..." id="active_image"> 
                </div>
            </div>
        </div>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Events Gallery</h2>
                <a href="gallery.html" class="btn btn-default btn-xl sr-button">View Gallery</a>
            </div>
        </div>
    </aside>
    </div>

    <div class="clearfix"></div>

     <!-- Contact Section -->
    <section id="help" class="content-section fullscreen">
        <div class="contact">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="small">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!-- <label>Name</label> -->
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <!--  <label>Email Address</label> -->
                                <input type="email" class="form-control" placeholder="Email Address - email@domain.xxx" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!-- <label>Phone Number</label> -->
                                <input type="number" class="form-control" placeholder="Phone Number (incl. Area Code)" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <!-- <label>Message</label> -->
                                <textarea rows="5" class="form-control" placeholder="Message. Please ensure you include which product or service you are enquiring about." id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>  
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
    <ul class="list-inline">
                        <li>
                            <a href="http://www.facebook.com"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://www.youtube.com"><i class="fa fa-youtube fa-fw fa-3x"></i></a>
                        </li>

                    </ul>
                    <hr class="small">
    </div>
    </div>
        <div class="col-lg-12 text-center">
                    <p class="lead">84 Brunswick Street, Brisbane, Queensland 4006</p>
                </div>
    </div>

    <!-- Login/Register Form -->

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
                                <form id="login-form" class="form-horizontal" action="#" method="post" role="form" style="display: block;">

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
    <div class="modal fade" id="mylogout">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="col-xs-6">
                            Logged Out
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parsly Validation script (jquery) -->
    <script type="text/javascript">
        $('#register-form').parsley();
    </script>


    <!-- Footer -->
    <footer>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
	
	<!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	
	<!-- Navigation -->
	<script src="js/nav.js"></script>

    <script type="text/javascript">
        $('.carousel').carousel({
  interval: 4000
})
    </script>

    <script type="text/javascript" src="js/slider.js"></script>
	
</body>

</html>
