<meta charset="UTF-8" />
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT id, name, addr, city, town, picurl FROM food';
    $stmt = $mysqli->prepare($sql);
    if ($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id, $name, $addr, $city, $town, $picurl);

        while ($stmt->fetch()){
            echo "{$id} : {$name}<br />";
        }
    }
    $stmt->free_result();
?>
