<?php

    $score = rand(0, 100);
    echo "{$score}<hr />";
    if ($score >= 90){
        echo "A";
    }else if ($score >= 80){
        echo "B";
    }else if ($score >= 70){
        echo "C";
    }else if ($score >= 60){
        echo "D";    
    }else{
        echo "E";
    }

?>