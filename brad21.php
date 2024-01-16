<?php
    $info = gd_info();
    var_dump($info);
    echo '<hr />';
    foreach($info as $k => $v){
        echo "{$k} = {$v}<br />";
    }
?>