<?php
    $i = 1;
    for( printBrad(); $i < 10 ; printLine()){
        echo "{$i}<br />";
        $i++;
    }

    function printBrad(){
        echo 'Brad<hr />';
    }
    function printLine(){
        echo '<hr />';
    }

?>