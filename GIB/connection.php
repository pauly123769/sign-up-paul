<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db2";  

    try {
        $conn = new mysqli($servername, $username, $password, $database);
    } catch (mysqli_sql_exception $e) {
        die ("Connection failed: Check Database settings <br>".$e);
    }



    //if($conn->connect_error){
       // die("Connection failed" .$conn->connect_error);
    //}
    //echo "";
    
    ?>

