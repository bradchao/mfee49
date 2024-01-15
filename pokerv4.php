<?php
    $poker = range(0, 51);
    shuffle($poker);
    
    foreach($poker as $v){
        //echo "{$v}<br />";
    }

    $players = [[],[],[],[]];
    foreach($poker as $index => $card){
        $players[$index % 4][(int)($index / 4)] = $card;
    }


?>
<hr />
<table border="1" width="100%">
    
    <?php
        foreach($players as $player){
            echo '<tr>';
            foreach($player as $card){
                echo "<td>{$card}</td>";
            }
            echo '</tr>';
        }
    ?>
    
</table>
&spades; &hearts; &diams; &clubs;








