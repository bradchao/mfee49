<?php

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT id, name, addr, city, town, picurl FROM food ' .
        'WHERE name LIKE ? OR addr LIKE ? OR city LIKE ? OR town LIKE ?';

    $key = '%中正%';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssss', $key, $key, $key, $key);

    if ($stmt->execute()){
        $stmt->store_result();
        $stmt->bind_result($id, $name, $addr, $city, $town, $picurl);
?>
<h1>Brad Big Company</h1>
<hr />
<table border="1" width="100%" >
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Town</th>
    </tr>
    <?php
        while ($stmt->fetch()){
            echo '<tr>';
            echo "<td>{$id}</td>";
            echo "<td>{$name}</td>";
            echo "<td>{$addr}</td>";
            echo "<td>{$city}</td>";
            echo "<td>{$town}</td>";
            echo '</tr>';
        }
    ?>
</table>
<?php
    }
    $stmt->free_result();
?>