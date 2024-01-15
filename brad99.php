<table border="1" width="100%">
        <?php
            define('ROWS', 2);
            define('COLS', 4);
            define('START', 2);

            for ($k = 0 ; $k < ROWS ; $k++ ){
                echo '<tr>';
                for ($j = START; $j < (START+COLS); $j++){
                    $newj = $j + $k * COLS;
                    echo '<td bgcolor=pink>';
                    for ($i = 1; $i <= 9 ; $i++ ){
                        $v = $newj * $i;
                        echo "{$newj} x {$i} = {$v}<br />";
                    }
                    echo '</td>';    
                }
                echo '</tr>';

            }
        ?>


</table>