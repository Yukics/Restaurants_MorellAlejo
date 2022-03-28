<?php
    //Import classes and functions
    require_once("class/restaurantClass.php");
    require_once("lib/f_restaurants.php");

    //Import components
    require_once("components/header.php");
    require_once("components/navbar.php");
    require_once("components/footer.php");


    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

    //Gets the array of objects\restaurants
    $obj_arr_rest = getRestaurants();
?>

<!doctype html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .img::before{
                width: 400px;
                height: auto;
                content:url("https://seeklogo.com/images/C/cooking-logo-3A7E3C7912-seeklogo.com.png");
            }
        </style>
    </head>
    <body>
        <?php echo(printHeader()); ?>
        <?php echo(printNavbar()); ?>
        
        <br></br>
        <div class="card-deck d-flex flex-row justify-content-around" style="width:90%; padding-left: 10%;">
            <?php foreach($obj_arr_rest as &$rest_obj): ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?= $rest_obj->pic ?>" alt="Card image cap" style="height:60%; width: max-content; background-position: center center; background-repeat: no-repeat; overflow: hidden;">
                    <div class="card-body">
                    <h5 class="card-title"><a href="/restaurant.php?name=<?= urlencode($rest_obj->name) ?>"><?= $rest_obj->name ?></a></h5>
                        <p class="card-text"><?= $rest_obj->description ?></p>
                        <p class="card-text"><?= $rest_obj->address ?></p>
                        <p class="card-text"><?= $rest_obj->phone ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php echo(printFooter()); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


