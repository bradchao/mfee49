<?php
    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('UTF8');

    $cname = 'amy'; $tel = '789'; $id = 2;
    $sql = 'UPDATE cust SET cname = ?, tel = ? WHERE id = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssi', $cname, $tel, $id);
    if ($stmt->execute()){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>