<?php
    include 'bradapis.php';
    session_start();
    if (!isset($_SESSION['var'])) header('Location: brad50.php');

    $var = $_SESSION['var'];
    $ary = $_SESSION['ary'];
    $s1 = $_SESSION['s1'];

    echo $var . '<hr />';
    var_dump($ary);
    echo '<hr />';
    var_dump($s1);
    echo '<hr />';
    echo "{$s1->getName()} : {$s1->sum()} : {$s1->avg()}";
?>
<hr />
<a href='brad52.php'>Logout</a>