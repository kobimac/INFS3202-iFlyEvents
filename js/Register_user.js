
$(document).ready(function () {
    $("#register-form").submit(function(e) {
        e.preventDefault();
        $("#UsernameErrorContainer").fadeOut();

        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : '../phpScripts/proc_register_user.php',
            data : data,
            dataType: 'json',
            success :  function(response)
            {
                console.log(response);
                if(response.create==0){

                    $("#UsernameErrorContainer").fadeIn(1000, function(){


                        $("#UsernameErrorContainer").html('<div class="alert alert-danger">  &nbsp; UserName is already taken !</div>');

                    });
                }
                else if(response.create==1) {

                    $("#UsernameErrorContainer").fadeIn(1000, function(){
                        $("#myModal").modal('toggle');
                        $("#loginbutton").html('<li><a href="#logout" data-toggle="modal" data-target="#mylogout">Log-out</a></li>');

                            session_start();
                            $_SESSION['username']="true";
                    });
                }
                else {
                    $("#user_nameErrorContainer").fadeIn(1000, function () {
                        $("#UsernameErrorContainer").html('<div class="alert alert-danger">  &nbsp; Unexpected Value ' + response + '</div>');
                    });
                }
            }
        });
        return false;
    });
});