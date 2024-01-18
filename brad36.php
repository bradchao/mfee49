<?php
    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('UTF8');

    $id = 3;
    $sql = 'DELETE FROM cust WHERE id = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>