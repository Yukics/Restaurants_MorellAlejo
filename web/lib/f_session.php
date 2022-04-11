<?php
    require_once 'db_connection.php';

    function checkUser($user, $hashedPass){
        //Establishes conection
        $mysqli = connectDB();

        //Query used to check login parameters
        $query = sprintf("SELECT username, email FROM users WHERE username='%s' AND password='%s'", $user, $hashedPass);
        
        //Executes query
        $result = $mysqli->query($query);

        //Some error handling
        if (!$result) {
            printf("Errormessage: %s\n", $mysqli->error);
            return null;
        }

        //Data fetch
        while ($row = $result->fetch_assoc()) {
            $user = $row['username'];
            $email = $row['email'];
        }

        //End process
        $result->close();

        //Return user checkData if user can login or null if not
        if(isset($user) && isset($email)){
            return array($user,$email);
        } else {
            return null;
        }
        
    }

?>