<?php
    include 'bradapis.php';
    session_start();

    

    $var = rand(0,100);
    $ary = [1,2,3,4];
    $s1 = new Student('Brad', 70, 34, 52);

    $_SESSION['var'] = $var;
    $_SESSION['ary'] = $ary;
    $_SESSION['s1'] = $s1;

    echo $var . '<hr />';
    var_dump($ary);
    echo '<hr />';

    echo "{$s1->getName()} : {$s1->sum()} : {$s1->avg()}";
    

    $var = 123;
    $ary = [7,8,9,10];
    $s1->setCh(80);

?>
<hr />
<a href='brad51.php'>Next</a>