<?php
    $fp = @fopen('dir1/file3.txt', 'a') or exit('Server busy');

    fwrite($fp, '123');

    fclose($fp);
    echo 'OK';
?>