<?php
    //Import classes and functions
    require_once("class/restaurantClass.php");
    require_once("lib/getRestaurants.php");

    //Import components
    require_once("components/header.php");
    require_once("components/navbar.php");
    require_once("components/footer.php");

    //Gets restaurants list from the ddbb
    $rest_list = getRestaurants();

    //Initiates the array of objects\restaurants
    $obj_arr_rest = array();

    //Creates restaurant objects and adds it to the array
    foreach ($rest_list as &$rest_item) {
        array_push($obj_arr_rest, new Restaurant($rest_item["name"],$rest_item["address"],$rest_item["phone"],$rest_item["description"],$rest_item["pic"]));
    }
?>

<!doctype html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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
        
        <div class="card-group">
            <?php foreach($obj_arr_rest as &$rest_obj): ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?= $rest_obj->pic ?>" alt="Card image cap" style="height:60%; overflow: hidden;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $rest_obj->name ?></h5>
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


