<?php
    $max = 100;
    if (isset($_REQUEST['max']) && $_REQUEST['max'] != ''){
        $max = $_REQUEST['max'];
    }
    echo rand(1,$max);
?>