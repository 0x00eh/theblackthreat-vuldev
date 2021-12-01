<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    // localhost configuration  
    // $con = mysqli_connect("","","","");
    
    // Remote Configuration
    //$con = mysqli_connect("server","username","password","database_schema");
    $con = mysqli_connect("remotemysql.com","ql4mfcHwHh","MGeK8EwjRT","ql4mfcHwHh");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
