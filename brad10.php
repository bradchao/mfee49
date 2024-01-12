<?php
    //$_SERVER['k'] = v;
    echo gettype($_SERVER) . '<hr />';
    foreach($_SERVER as $k => $v){
        echo "{$k} => {$v}<br />";
    }

?>