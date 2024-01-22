<?php
    if (!isset($_REQUEST['account'])) header('location: brad41.php');

    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
    $name = $_REQUEST['name'];

    $icon = $_FILES['icon'];
    $iconData = file_get_contents($icon['tmp_name']);
    $iconType = $icon['type'];

    $sql = 'INSERT INTO member (account,passwd,name, icon, icontype)' .
        ' VALUES (?,?,?,?,?)';
    $mysqli = new mysqli('localhost','root','', 'ispan', 3306);
    $mysqli->set_charset('utf8');
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sssss', $account,$passwd, $name, $iconData, $iconType);
    if ($stmt->execute()){
        echo 'success';
    }else{
        echo 'failure';
    }

?>