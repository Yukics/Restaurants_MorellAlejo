<?php

function printNavbar($user){

    //Depending if user is logged or not set Login or Logout
    if($user != ""){
        $userLink =   '<div class="ml-auto p-2">
                        <li class="nav-item pt-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logged in as ' . $user . ' 
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </div>       
                        </li></div>
                        ';
    } else {
        $userLink =   '<div class="p-2"><li class="nav-item pt-2">
                            <form action="login.php">
                                <input type="submit" class="btn btn-primary" value="Login" />
                            </form>      
                        </li></div>' ;
    }

    return '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav container-fluid">
                    <div class="d-flex justify-content-between" style="width:100%;">
                        <div class="p-2">
                            <li class="nav-item active pt-1">
                                <a class="nav-link h4" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </div>'
                    .
                    $userLink
                    . 
                    '</div>
                </ul>
            </div>
        </nav>
    ';

}
?>