<?php
    $mysqli = new mysqli('localhost','root','', 'ispan', 3306);
    $mysqli->set_charset('utf8');
    $sql = "SELECT * FROM member WHERE id = 7";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();

    //header('content-type: image/jpeg');
    echo '<img src="data:image/jpeg;base64, '. base64_encode($row['icon']) .'"/>';

?>