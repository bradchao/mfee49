<?php
    $a = array();
    $a[0] = array();
    $a[1] = array();
    $a[0][0] = 123;
    $a[1][17] = 'Brad';
    $a[0][3] = 'OK';
    $a[1][77] = 123;
    $a[1][100] = 12.3;
    $a[3] = 100;
    var_dump($a);
    echo '<hr />';

    foreach($a as $v){
        if (gettype($v) == 'array'){
            foreach($v as $vv){
                echo "{$vv} ";
            }    
        }else{
            echo $v;
        }
        echo "<br />";
    }


?>