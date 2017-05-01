<?php

require_once 'proc_dbConnect.php';

if($_POST) {

    try {
        $stmt = $conn->prepare("Select * from registered_user where username = :username");

        $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        //$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
        $stmt->execute();
        // initialise an array for the results
        $user = array();
        //we have a user registered under that name
        switch ($stmt->rowCount()) {
            case 1: {
                //we have a winner - check the password
                $hash = $user['password'];
                if (password_verify($_POST['username'], $hash)) {
                    //Username and password match
                    echo  "1" ;
                } else {
                    //Password is invalid
                    echo  json_encode("3") ;
                }

                break;
            }
            case 0: {
                //no user with that username exists
                echo  "0";
                break;
            }
            default: {
                //something has gone screwy - we have more that one user with the same username
                echo  "2" ;
            }
        }
    }

    catch (PDOException $e){
        echo $e ->getMessage();
    }
}

?>