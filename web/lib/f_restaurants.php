<?php
    require_once __DIR__.'/../class/restaurantClass.php';
    require_once 'connection.php';


    // This function is supposed to get the top 5 restaurants and return it as an array of array(key=>value)
    function getRestaurants(){
        //Top 5 restaurants from Task1
        // $restaurants = array(
        //     [
        //         "name"=>"Japo Santa Catalina",
        //         "address"=>"Carrer de Sant Magí, 25, 07013 Palma de Mallorca, Mallorca España", 
        //         "phone"=>"+34 971 73 83 21", 
        //         "description"=>"Japanese Food", 
        //         "pic"=>"https://media-cdn.tripadvisor.com/media/photo-s/1d/1d/ae/1c/carpaccio-rol.jpg"
        //     ],
        //     [
        //         "name"=>"Cannibal Cantina Bistro",
        //         "address"=>"Plaça de Sant Antoni 8, 07002 Palma de Mallorca, Mallorca España", 
        //         "phone"=>"+34 662 54 20 89", 
        //         "description"=>"Gourmet sheeeeeeet", 
        //         "pic"=>"https://media-cdn.tripadvisor.com/media/photo-p/18/94/a0/c8/cannibal-cantina-bistro.jpg"
        //     ],
        //     [
        //         "name"=>"Izakaya Mallorca",
        //         "address"=>"Carrer d'Espartero, 15, 07014 Palma de Mallorca, Mallorca España", 
        //         "phone"=>"+34 871 03 76 33", 
        //         "description"=>"Japo traditional food", 
        //         "pic"=>"https://media-cdn.tripadvisor.com/media/photo-s/1d/39/e8/cb/izakaya-mallorca.jpg"
        //     ],
        //     [
        //         "name"=>"FaBrick food & more",
        //         "address"=>"Calle San Magín 84, 07013 Palma de Mallorca, Mallorca España", 
        //         "phone"=>"+34 610 89 06 21", 
        //         "description"=>"Innovative cuisine", 
        //         "pic"=>"https://media-cdn.tripadvisor.com/media/photo-s/17/d0/c3/7a/fabrick-food-more.jpg"
        //     ],
        //     [
        //         "name"=>"Pizzeria Los Dos Hermanos",
        //         "address"=>"Carrer de la Reina Maria Cristina, 61, 07004 Palma de Mallorca, Mallorca España", 
        //         "phone"=>"+34 871 53 09 63", 
        //         "description"=>"Italian Food", 
        //         "pic"=>"https://media-cdn.tripadvisor.com/media/photo-p/1b/d4/05/f6/genovese-pesto-de-albahaca.jpg"
        //     ]
        // );

        //Establishes conection
        $mysqli = connectDB();
        $query = "SELECT * From restaurants";
        $obj_arr_rest = array();

        //If conection is stablished
        if ($mysqli !== false){
            if ($resultado = $mysqli->query($query)) {

                // /* get objects array */
                while ($obj = $resultado->fetch_object()) {
                    array_push($obj_arr_rest, new Restaurant($obj->name, $obj->address, $obj->phone, $obj->description, $obj->pic));
                }
                return $obj_arr_rest;
                // /* docs things, closing stuff */
                $resultado->close();
            }
            $mysqli->close();
        } else {
            return false;
        }        
    }

    function getRestaurant($name){      

        $mysqli = connectDB();
        $query = "SELECT * From `restaurants` where `name`=('$name')";
        $obj_arr_rest = array();

        //If conection is stablished
        if ($mysqli !== false){
            if ($resultado = $mysqli->query($query)) {

                // /* get objects array */
                while ($obj = $resultado->fetch_object()) {
                    array_push($obj_arr_rest, new Restaurant($obj->name, $obj->address, $obj->phone, $obj->description, $obj->pic));
                }
                
                // /* docs things, closing stuff */
                $resultado->close();
                return $obj_arr_rest;
            }
            $mysqli->close();
        } else {
            return false;
        }        
    }
?>