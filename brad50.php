<?php
    session_start();

    $var = rand(0,100);
    $_SESSION['var'] = $var;
    
    echo $var;
?>
<a href='brad51.php'>Next</a>