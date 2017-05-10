<?php
try {
    $config = parse_ini_file('Config.ini');
    $conn = new PDO("mysql:host=127.0.0.1;dbname=" . $config['dbname'], $config['username'], $config{'password'});
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch (PDOException $e)
    {
    echo "connection failed:" . $e->getMessage();
    }
?>

