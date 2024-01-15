<?php
    $p = array(0,0,0,0,0,0,0);  // $p[0] = 0. $p[1] = 0, ...$p[6] = 0
    for ($i = 0; $i < 100000; $i ++){
        $point = rand(1,9);
        if ($point >= 1 && $point <= 9 ){
            $p[$point>6?$point-3:$point]++;
        }else{
            $p[0]++;
        }
    }

    if ($p[0] == 0){
        for($i = 1; $i<=6; $i++){
            echo "{$i}點出現{$p[$i]}次<br />";
        }
    }else{
        echo 'Ooop!';
    }
?>