<?php
    session_start();
    //Import classes and functions
    require_once("lib/f_restaurants.php");

    //Import components
    require_once("components/header.php");
    require_once("components/navbar.php");
    require_once("components/footer.php");

    $username="";
    $email="";
    if(isset($_SESSION["username"])){
        $username=$_SESSION["username"];
        $email=$_SESSION["email"];
    }

    //Gets the array of object\restaurants
    $obj_arr_rest = getRestaurant(urldecode($_GET["name"]));
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
        <?php echo(printNavbar($username, $email)); ?>

            <?php foreach($obj_arr_rest as &$rest_obj): ?>
                <div style="padding-bottom: 5%; padding-top: 3%">
                    <img style="width: auto; height: 400px;" src="<?= $rest_obj->pic ?>" class="img-fluid rounded mx-auto d-block mh-30" alt="Responsive image">
                    <br></br>
                    <h1 class="text-center"><?= $rest_obj->name ?></h1>
                    <h3 class="text-center"><?= $rest_obj->description ?></h3>
                    <br></br>
                    <address class="text-center"><?= $rest_obj->address ?></address>
                    <p class="text-center"><a href=<?php echo("tel:".str_replace(' ', '', $rest_obj->phone)); ?>><?= $rest_obj->phone ?></a></p>
                </div>

            <?php endforeach; ?>
        <?php echo(printFooter()); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


