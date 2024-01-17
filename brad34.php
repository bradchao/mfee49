<?php
    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('UTF8');

    //var_dump($mysqli);
    // $sql = 'INSERT INTO cust (cname,tel,birthday) ' .
    //         'VALUES ("brad","123","1999-01-02")';
    // if ($mysqli->query($sql)){
    //     echo 'OK';
    // }else{
    //     echo 'XX';
    // }

    $cname = 'amy'; $tel = '456'; $birthday = '1999-01-04';
    $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $cname, $tel, $birthday);
    if ($stmt->execute()){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>