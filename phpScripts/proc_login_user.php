<?php

require_once 'proc_dbConnect.php';

if($_POST) {
    $suppliedusername=trim($_POST['username']);

    try {
        $stmt = $conn->prepare("Select * from registered_user where username = :username");
        $stmt->execute(array(":username" => $suppliedusername));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1){
            //we have a user registered under that name
            if (password_verify(trim($_POST['password']), $row['pass'])) {
                $result=array('auth'=>0,'user'=>$suppliedusername)  ; //password fine

            } else {
                //Password is invalid
                $result=array('auth'=>1);
            }
        }

        else if ($stmt->rowCount()==0) {
            $result=array('auth'=>2); //
        }

        echo json_encode($result);

    }

    catch (PDOException $e){
        echo $e ->getMessage();
    }
}

?>