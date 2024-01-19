<?php
    $passwd = '123456';
    $newpasswd = password_hash($passwd, PASSWORD_DEFAULT);
    $len = strlen($newpasswd);

    echo "{$passwd} : {$newpasswd} : {$len}<hr />";

    if (password_verify('123456', $newpasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>