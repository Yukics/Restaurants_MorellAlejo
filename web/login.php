<?php
    //Starts session if already logged in redirect to idnex.php
    session_start();
    if(isset($_SESSION['username'])) {
        header("Location: http://localhost:8085/index.php");
        die;
    }

    //Imports library
    require_once("lib/f_session.php");    
    
    //Init var as redirect disabled
    $redirect = "";

    //Login logic on post request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field
        $username = $_POST['username'];
        $password = hash("sha256",  $_POST['password']);

        //Check login strings, if exists on database returns username, else nothing
        $_SESSION['username']=checkUser($username, $password);

        //When set this litle js code redirects to index.php
        $redirect = '<script type="text/javascript">
                        window.location.href = "http://localhost:8085/index.php";
                    </script>';
    }  
?>

<!doctype html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .login-container{
                padding-top: 20%;
                display: flex;
                align-items: center;
                justify-content: center;
                /* width: 70%; */
                width: 30vw;
            }
            .login-form{
                width: 100%;
                height: 100%;
                padding: 5%;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form h3{
                text-align: center;
                color: #333;
            }
            .login-container form{
                padding: 10%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .btnSubmit {
                width: 4vw;
                border-radius: 1rem;
                padding: 1.5%;
                border: none;
                cursor: pointer;
            }
            .login-form .btnSubmit{
                text-align: center;
                font-weight: 600;
                color: #fff;
                background-color: #0062cc;
            }
        </style>
    </head>
    <body>  
        <?= $redirect ?>
        <div class="container-fluid login-container">
            <div class="login-form">
                <h3>Login page</h3>
                <form action="/login.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="username" value="" />
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="password" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                </form>
            </div>        
        </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


