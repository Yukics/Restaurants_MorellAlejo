<?php
    function connectDB(){
        $servername = "db";
        $username = "yuki";
        $password = "pass123";
        $db = "restaurants_db";

        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $db);
        $mysqli->set_charset("utf8");

        // Test connection
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n", mysqli_connect_error());
            return false;
        } else {
            return $mysqli;
        }
    }
?> 