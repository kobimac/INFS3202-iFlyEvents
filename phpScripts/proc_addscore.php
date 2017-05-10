<?php
require_once 'proc_dbConnect.php';


    try {
        //Insert the data into the Scoring table
        $stmt = $conn->prepare("Insert into Scoring (TeamID,EventID,EvtRound,Score) 
                                Values (:TeamID,:EventID,:EvtRound,:Score)");
        console.log($_POST['TeamID']);
        console.log($_POST['EventID']);
        console.log($_POST['Round']);
        console.log($_POST['Score']);
        $stmt->bindParam(':TeamID', $_POST['TeamID']);
        $stmt->bindParam(':EventID', $_POST['EventID']);
        $stmt->bindParam(':EvtRound', $_POST['Round']);
        $stmt->bindParam(':Score', $_POST['Score']);

        if ($stmt->execute()) {
            $result = array('ScoreUpdate' => 1); //success
            echo json_encode($result);
        } else {
            $result = array('ScoreUpdate' => 0); //Failed
            echo json_encode($result);
        }

    }
    catch
        (PDOException $e){

            echo $e->getMessage();
        }
?>