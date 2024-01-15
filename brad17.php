<?php
    $a = array(1,2,3);
    $a[] = 12;
    $a[] = 12.3;
    $a[] = 'Brad';
    $a[134] = 67;
    $a[4] = 3.4;
    var_dump($a);
    echo '<hr />';
    $a['name'] = 'Brad';
    $a['gender'] = true;
    $a['age'] = 18;
    var_dump($a);
    echo $a['age'];
    echo '<hr />';
    foreach($a as $k => $v){
        echo "{$k} : {$v}<br />";
    }
?>