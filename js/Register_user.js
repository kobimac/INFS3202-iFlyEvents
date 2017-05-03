
$(document).ready(function () {
    $("#register-form").submit(function() {

        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'proc_register_user.php',
            data : data,
            beforeSend: function()
            {
                $("#UsernameErrorContainer").fadeOut();

            },
            success :  function(data)
            {
                console.log(data);
                if(data==1){

                    $("#UsernameErrorContainer").fadeIn(1000, function(){


                        $("#UsernameErrorContainer").html('<div class="alert alert-danger">  &nbsp; UserName is already taken !</div>');

                    });
                }
                else {

                    $("#UsernameErrorContainer").fadeIn(1000, function(){
                        $("#myModal").modal('toggle');
                        $("#loginbutton").html('<li><a href="#logout" data-toggle="modal" data-target="#mylogout">Log-out</a></li>');

                        //check for the existence of session data, if none, create one.
                        if(session_status()==PHP_SESSION_NONE)
                        {
                            session_start();
                            header("Location: Register_user.php");
                        }
                    });
                }
            }
        });
        return false;
    });
});