<?php
function printNavbar(){
    return '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link h4" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link h4" href="#">Restaurants</a>
                </li>
                <li class="nav-item">
                <a class="nav-link h4" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    ';

}
?>