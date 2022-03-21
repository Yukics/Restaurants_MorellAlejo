<?php
    function connectDB(){
        $servername = "db";
        $username = "yuki";
        $password = "pass123";
        $db = "restaurants_db";

        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $db);

        // Test connection
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            return false;
        } else {
            return $mysqli;
        }
    }
?> 