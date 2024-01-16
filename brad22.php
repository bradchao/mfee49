<?php
    $rate = 0;
    if (isset($_GET['rate'])){
        $rate = $_GET['rate'];     // 50%
    }
    

    // 1. 畫布
    $img = ImageCreate(400, 20);
    // echo gettype($img);
    
    // 2. 作畫
    $yellow = ImageColorAllocate($img, 255, 255, 0);
    $red = ImageColorAllocate($img, 255, 0, 0);

    ImageFilledRectangle($img, 0, 0, 400, 20, $yellow);
    ImageFilledRectangle($img, 0, 0, 400*$rate/100, 20, $red);

    // 3. 輸出 => Browser, File
    header('content-type: image/jpeg');
    ImageJpeg($img);

    // 4. 清除
    imagedestroy($img);

?>