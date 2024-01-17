<?php
    include 'bradapis.php';

    $myBike = new Bike();
    $myBike->upSpeed();
    echo $myBike->getSpeed();

?>