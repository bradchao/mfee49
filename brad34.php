<?php
    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    //var_dump($mysqli);
    $sql = 'INSERT INTO cust (cname,tel,birthday) ' .
            'VALUES ("brad","123","1999-01-02")';
    if ($mysqli->query($sql)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>