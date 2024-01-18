<?php
    // https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    $json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');

    $data = json_decode($json);
    //var_dump($data);

    $mysqli = new mysqli('localhost', 'root', '', 'ispan', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'INSERT INTO food (foodid,name,addr,feature,city,town,picurl,lat,lng) ' .
            'VALUES (?,?,?,?,?,?,?,?,?)';
    $stmt = $mysqli->prepare($sql);

    foreach($data as $row){
        $stmt->bind_param('sssssssdd',$row->ID,$row->Name,
        $row->Address,$row->FoodFeature,$row->City,$row->Town,$row->PicURL,
        $row->Latitude,$row->Longitude);
        $stmt->execute();
        //echo "{$row->ID} : {$row->Name} : {$row->Tel}<br />";
    }
    echo 'OK';
?>