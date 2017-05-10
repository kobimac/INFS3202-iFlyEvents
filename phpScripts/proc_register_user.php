<?php

require_once 'proc_dbConnect.php';

if($_POST) {

    try {
        //see if the requested username already exists
        $stmt = $conn->prepare("Select * from registered_user where username = :username");

        $stmt->bindParam(':username', $_POST['user_name']);
        $stmt->execute();

        if ($stmt->rowCount()==0){
            //no registered user with that username so insert the data
            $stmt = $conn->prepare("INSERT INTO registered_user(first_name, last_name, username, pass, email)
                    VALUES (:firstname, :lastname, :username, :password, :email)");
            $stmt->bindParam(':firstname', $_POST['first_name']);
            $stmt->bindParam(':lastname', $_POST['last_name']);
            $stmt->bindParam(':password', password_hash($_POST['user_password'],PASSWORD_BCRYPT,array('cost'=>11)));
            $stmt->bindParam(':username', $_POST['user_name']);
            $stmt->bindParam(':email', $_POST['email']);

            // insert a row
            if($stmt->execute())
            {
                $result=array('create'=>1); //user created
            }
            else {
                $result=array('create'=>2); //some other error
            }
        }
        else
        {
            $result=array('create'=>0); //user already exists
            echo json_encode($result);
        }
    }

    catch (PDOException $e){

        echo $e ->getMessage();
    }
    finally{
        echo json_encode($result);
    }
}

?>