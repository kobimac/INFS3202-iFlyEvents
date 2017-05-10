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

<div class="container">
 
<table class="table table-bordered">
 <thead>
 <tr>
 <th>Team Name</th>
 <th>Round 1</th>
 <th>Round 2</th>
 <th>Round 3</th>
 <th>Round 4</th>
 <th>Round 5</th>
 <th>Round 6</th>
 <th>Total</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <?php
 include("DBConfig.php");
 
 $result = mysql_query("SELECT * FROM test_demo");
 
 while($test = mysql_fetch_array($result))
 {
 $teamName = $test['teamName']; 
 echo"<td>".$test['teamName']."</td>";
 echo"<td>".$test['round1']."</td>";
 echo"<td>".$test['round2']."</td>";
 echo"<td>".$test['round3']."</td>";
 echo"<td>".$test['round4']."</td>";
 echo"<td>".$test['round5']."</td>";
 echo"<td>".$test['round6']."</td>";
 echo"<td>".$test['total']."</td>";  
 echo "</tr>";
 }
 mysql_close($conn);
 ?>
</table>

</div>
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
	<script src="js/grayscale.js"></script>
	
</body>

</html>
