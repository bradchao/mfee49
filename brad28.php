<?php
    $data = file('dir1/ns1hosp.csv');
    foreach($data as $line){
        $fields = explode(',', $line);
        echo "{$fields[2]}<br />";
    }
?>