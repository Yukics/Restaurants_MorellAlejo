<?php

function printNavbar($user){

    //Depending if user is logged or not set Login or Logout
    if($user != ""){
        $userLink =   '<li class="nav-item">
                            <a class="nav-link h4" href="logout.php">Logout</a>
                        </li>';
    } else {
        $userLink =   '<li class="nav-item">
                            <a class="nav-link h4" href="login.php">Login</a>
                        </li>' ;
    }

    return '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link h4" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>'
                    .
                    $userLink
                    . '</ul>
            </div>
        </nav>
    ';

}
?>