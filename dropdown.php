<?php
if (isset($_SESSION['username'])!="")
{
    header("Location:index.php");

}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kobi McKerihan">

    <title>iFly Downunder Events</title>

    <script type="text/javascript">
            function updateTable(chosenEvent) {

                var selevent = chosenEvent.value;
                $.ajax({
                    type: "POST",
                    url: './phpScripts/proc_scoreboard.php',
                    data: "eventid=" + selevent,
                    success: function (response) {

                        if (response) {
                            $("#scoreboard").html(response);
                            return true;
                        }
                        else {
                            $("#scoreboard").html("No Scoreboard found");
                            return false;

                        }
                    }
                });
            }

    function postScores(){
                console.log('postscores called');
        var e = document.getElementById("EventID");
        console.log(e);
        var strEvent = e.options[e.selectedIndex].value;
        var data = $("#dataEntry").serialize() + "eventID=" + strEvent;
        $.ajax({
            type: "POST",
            url: './phpScripts/proc_addscore.php',
            data: data,
            success: function(data) {
                console.log(data);
            },
            error: console.log("error")

        });
        console.log(strEvent);
    }

</script>

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
        <li><a class="page-scroll" href="index.php#page-top">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
<form>

<div class="content-section">

<h3>Please select the Event you wish to see the Results of</h3>

<?php
include_once 'phpScripts/proc_dbConnect.php';
$sql='select eventid,eventname from myevent ORDER by eventname';
$smt = $conn->prepare($sql);
$smt->execute();
$data = $smt->fetchAll();
?>
<select class = "btn btn-primary dropdown-toggle" name="Event" id="EventID" onchange="updateTable(this)">
    <option value="" disabled selected style="display: none">--Select Event--</option> 
<?php foreach ($data as $row): ?>
    <option value='<?=$row["eventid"]?>'><?=$row["eventname"]?></option>
<?php endforeach ?>
</select>
    <div id="scoreboard" class="table-responsive"></div>
</form>

<br/>


<div class="container containerfix">
<div class = "eventform">
    <form id="dataEntry" class="form-horizontal" >
    <?php
    $sql='select teamid,teamname from team ORDER by teamid';
    $smt = $conn->prepare($sql);
    $smt->execute();
    $data = $smt->fetchAll();
    ?>
<fieldset>

<!-- Form Name -->
<legend>Score Submission Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="teamName">Team Name</label>  
  <div class="col-md-4 dropdown">
  <select class = "btn btn-primary dropdown-toggle" name="Team" id="TeamID">
        <option value="" disabled selected style="display: none">--Select Team--</option>
        <div class="form-group">
            <label class="col-md-4 control-label" for="teamName">Team Name</label>  
        <?php foreach ($data as $row): ?>
            <option class="col-md-4"> value='<?=$row["teamid"]?>'><?=$row["teamname"]?></option>
        <?php endforeach ?>
        </div>
        </select>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="roundName">Round Name</label>  
  <div class="col-md-4">
  <input id="roundName" name="roundName" type="text" placeholder="Enter the Round Name" class="form-control input-md" required="">
  <span class="help-block">Please enter in the format "Round x"</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="roundScore">Round Score</label>  
  <div class="col-md-4">
  <input id="roundScore" name="roundScore" type="text" placeholder="Enter the Round Score" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="scoreSubmit">Submit Score</label>
  <div class="col-md-4">
    <button id="scoreSubmit" name="scoreSubmit" class="btn btn-success" onclick="return postScores()"">Submit</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</div>

</body>
</html>