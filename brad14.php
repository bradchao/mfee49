<?php
    $ary = array(1,2,'brad',4,12.3,true);
    var_dump($ary);
    echo '<hr />';
    for ($i = 0; $i <= 5; $i++){
        echo "{$ary[$i]}<br />";
    }
    echo '<hr />';
    echo $ary[3];
    echo '<hr />';
    echo count($ary);
    echo '<hr />';
    $ary[3] = 'iSpan';
    for ($i = 0; $i < count($ary); $i++){
        echo "{$ary[$i]}<br />";
    }
    echo '<hr />';
    var_dump($ary);
?>