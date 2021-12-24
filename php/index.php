<?php

   $server= "localhost";
   $username= "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){echo "Success connecting to the db";}

   $insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql ,br. $con->error";
    }
        
    $con->close();

?>


