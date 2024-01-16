<?php
    $fp = fopen('dir1/file1.txt', 'r');
    
    while ($c = fgetc($fp)){
        echo $c;
    }


    fclose($fp);
?>