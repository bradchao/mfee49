<?php
    class Bike {
        private $speed = 0;

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
        }

        function downSpeed(){
            $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
        }

        function getSpeed(){
            return $this->speed;
        }
    }

    $myBike = new Bike(); $urBike = new Bike();
    //var_dump($myBike);

    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();

    echo $myBike->getSpeed() . '<br />';
    $myBike->downSpeed(); $myBike->downSpeed();
    echo $myBike->getSpeed() . '<hr />';

    //$urBike->speed = 5.1;
    //echo $urBike->speed;



?>