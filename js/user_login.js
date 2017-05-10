
$(document).ready(function () {
    // Stop the form from submitting so we can do it via AJAX
    $("#login-form").submit(function(e) {
        e.preventDefault();
        $("#UsernameErrorContainer").fadeOut();
        $("#pwdErrorContainer").fadeOut();

        var data = $("#login-form").serialize();


        $.ajax({

            type : 'POST',
            url  : '../phpScripts/proc_login_user.php',
            data : data,
            dataType: 'json',
            success :  function(response)
            {

                if (response.auth == 2) {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#user_nameErrorContainer").html('<div class="alert alert-danger">  &nbsp; Username does not exist!</div>');
                    });
                }
                else if (response.auth == 1) {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#user_nameErrorContainer").html('<div class="alert alert-danger">  &nbsp; Invalid Password!</div>');
                    });
                }
                else if (response.auth == 0) {
                    $("#UsernameErrorContainer").fadeIn(1000, function () {
                        $("#myModal").modal('toggle');
                        $("#loginbutton").html('<li><a href="#mylogout" data-toggle="modal" data-target="#mylogout"><div class="loggedinusername">Profile</div></a></li>');

                        //check for the existence of session data, if none, create one.
                            session_start();
                            $_SESSION['username']=response.user;
                            $("#loggedinusername").html = response.user;
                            header("Location: Register_user.php");
                    });
                } else {


                }
            }
        });
        return false;
    });
});