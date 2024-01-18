<?php
    // https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    $json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');

    $data = json_decode($json);
    //var_dump($data);

    foreach($data as $row){
        echo "{$row->ID} : {$row->Name} : {$row->Tel}<br />";
    }

?>