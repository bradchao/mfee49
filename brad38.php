<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT id fid, name fname FROM food';
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_object()){
        echo "{$row->fid} : {$row->fname}<br />";
    }


?>