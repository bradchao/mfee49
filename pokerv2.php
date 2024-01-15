<?php
    // 洗牌
    $poker = array();
    for ($i=0; $i<52; $i++){
        do{
            $temp = rand(0,51);
        
            // 檢查機制
            $isRepeat = false;
            for ($j = 0; $j < $i; $j++){
                if ($temp == $poker[$j]){
                    // 重複了             
                    $isRepeat = true;
                    break;
                }
            }    
        }while($isRepeat);

        $poker[] = $temp;

    }

    foreach($poker as $v){
        echo "{$v}<br />";
    }
    // 發牌

    // 攤牌 + 理牌
?>