<?php 
    // Set connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_portal";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn){
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
    // echo "Success connecting to the db";
?>