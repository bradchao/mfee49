<?php
    $upload = $_FILES['upload'];
    // foreach($upload as $k => $v){
    //     echo "{$k} : {$v}<br />";
    // }

    if ($upload['error'] == 0){
        move_uploaded_file($upload['tmp_name'], "dir1/{$upload['name']}");
        echo 'Upload success!';
    }else{
        echo 'Upload failure';
    }
?>