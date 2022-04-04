<?php

    //Defining Restaurant as Class
    class Restaurant {
        public $name;
        public $address;
        public $phone;
        public $description;
        public $pic;

        public function __construct(string $name, string  $address, string  $phone, string  $description, string  $pic){
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone;
            $this->description = $description;
            $this->pic = $pic;
        }
    }

?>