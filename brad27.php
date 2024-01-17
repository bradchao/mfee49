<?php
    $fname = 'dir1/file1.txt';
    $fp = fopen($fname, 'r');
    
    $content = fread($fp, filesize($fname));
    echo $content;
    
    fclose($fp);
?>