<?php
    if (!isset($_REQUEST['account'])) header('location: brad41.php');

    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT);
    $name = $_REQUEST['name'];

    $sql = 'INSERT INTO member (account,passwd,name) VALUES (?,?,?)';
    $mysqli = new mysqli('localhost','root','', 'ispan', 3306);
    $mysqli->set_charset('utf8');
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $account,$passwd, $name);
    if ($stmt->execute()){
        echo 'success';
    }else{
        echo 'failure';
    }

?>