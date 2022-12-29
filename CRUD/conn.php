<?php
   
try{
    $dbHost = "localhost";
    $dbName = "user_info";
    $dbUser = "developer";
    $dbPassword = "root";

        $myConn = new PDO("mysql:host=$dbHost;dbname=$dbName;",$dbUser,$dbPassword);
        $myConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: "
            . $e->getMessage();
    }
?>