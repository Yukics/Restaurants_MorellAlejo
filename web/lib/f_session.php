<?php

    require_once 'db_connection.php';

    function checkUser($user, $hashedPass){

        //Establishes conection
        $mysqli = connectDB();
        $query = sprintf("SELECT username FROM users WHERE username='%s' AND password='%s'", $user, $hashedPass);
        
        //Executes query
        $result = $mysqli->query($query);

        //Some error handling
        if (!$result) {
            $message  = 'ERROR: ' . mysql_error() . "\n";
            die($message);
        }

        //Data fetch
        while ($row = $result->fetch_assoc()) {
            $user = $row['username'];
        }

        //End process
        $result->close();

        //Return user check
        if($user){
            return $user;
        } else {
            return null;
        }
        
    }

?>