<?php

       # Making this DockerCompatible.
       # db_hostname is the name of the docker container in which MySQL runs
 
    // ----------- Database connection ----------//
    $mysql_db_hostname = "mysql";
    $mysql_db_user = "linkboardsql";
    $mysql_db_password = "9bQJqab8LoRh";
    $mysql_db_database = "linkboarddb";  
    $con = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) 
                       or die("Failed to connect to MySQL: " . mysqli_connect_error());
    mysqli_select_db($con, $mysql_db_database) or die("Could not select database" . mysqli_connect_error());
   
?>
