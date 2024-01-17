<?php
    class Bike {
        var $speed = 0;

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
        }

        function downSpeed(){
            $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
        }
    }

    $myBike = new Bike();
    var_dump($myBike);

?>