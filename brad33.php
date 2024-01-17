<?php
    include 'bradapis.php';

    $myBike = new Bike();
    $myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
    $myBike->upSpeed();$myBike->upSpeed();
    echo $myBike->getSpeed();

    echo '<hr />';

    $myScooter = new Scooter();
    $myScooter->changeGear(1);
    $myScooter->upSpeed();$myScooter->upSpeed();$myScooter->upSpeed();
    $myScooter->changeGear(4);
    $myScooter->upSpeed();$myScooter->upSpeed();
    echo $myScooter->getSpeed();

?>