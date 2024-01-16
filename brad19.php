<?php
    function sayYa(){
        echo 'Ya!<br />';
    }
    function sayHello($name = 'World'){
        echo "Hello, {$name}<br />";
    }
    function sayHelloV2($name, $n = 1){
        for ($i = 0; $i < $n; $i++){
            echo "Hello, {$name}<br />";
        }
    }
    function sum(){
        //echo func_num_args();
        //echo func_get_arg(4);
        $args = func_get_args();
        $sum = 0;
        foreach($args as $v){
            $sum += $v;
        }

        return $sum; 
    }

    sayYa(); sayYa();
    sayHello('Brad');
    sayHello();
    sayHelloV2('Brad',3);
    echo sum(1,2,3,4,5,6, 100, 200);
?>