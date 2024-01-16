<?php
    $img = imagecreatefromjpeg('imgs/coffee.jpg');

    $blue = imagecolorallocate($img, 0, 0, 255);
    imagettftext($img, 36, -30, 100, 200, $blue, 
        'fonts/brad.ttf', '您好, 全世界');

    header('content-type: image/jpeg');
    imagejpeg($img);
    
    imagejpeg($img, 'imgs/brad.jpg');

    imagedestroy($img);
?>