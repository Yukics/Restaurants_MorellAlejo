<?php
    require_once 'db_connection.php';

    function checkUser($user, $hashedPass){
        //Establishes conection
        $mysqli = connectDB();
        $query = sprintf("SELECT username, email FROM users WHERE username='%s' AND password='%s'", $user, $hashedPass);
        
        //Executes query
        $result = $mysqli->query($query);

        //Some error handling
        if (!$result) {
            $message  = 'ERROR: ' . mysql_error() . "\n";
            die($message);
            return null;
        }

        //Data fetch
        while ($row = $result->fetch_assoc()) {
            $user = $row['username'];
            $email = $row['email'];
        }

        //End process
        $result->close();

        //Return user check
        if(isset($user) && isset($email)){
            return array($user,$email);
        } else {
            return null;
        }
        
    }

?>