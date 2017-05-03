
$(document).ready(function () {
    $("#login-form").submit(function() {

        var data = $("#login-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'proc_login_user.php',
            data : data,
            beforeSend: function()
            {
                $("#UsernameErrorContainer").fadeOut();
                $("#pwdErrorContainer").fadeOut();

            },
            success :  function(data)
            {
                console.log(data);
                if ((data) == '0') {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#user_nameErrorContainer").html('<div class="alert alert-danger">  &nbsp; Username does not exist!</div>');
                    });
                } else if ((data) == '1') {
                    $("#UsernameErrorContainer").fadeIn(1000, function () {
                        $("#myModal").modal('toggle');
                        $("#loginbutton").html('<li><a href="#logout" data-toggle="modal" data-target="#mylogout">Profile</a></li>');

                        //check for the existence of session data, if none, create one.
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                            header("Location: Register_user.php");
                        }
                    });
                } else if ((data) == '3') {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#pwdErrorContainer").html('<div class="alert alert-danger">  &nbsp;Password is incorrect!</div>');
                    });
                } else {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#user_nameErrorContainer").html('<div class="alert alert-danger">  &nbsp; Unexpected Value ' + data + '</div>');
                    });
                }
            }
        });
        return false;
    });
});