<?php
    session_start();

    //unset($_SESSION['var']);
    session_destroy();

    header('location: brad50.php');

?>