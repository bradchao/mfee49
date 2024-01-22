<?php
    $title = 'Brad Big Company';
    $user = 'Brad';
    $page = file_get_contents("brad53.html");
    $page = str_replace('_title_', $title, $page);
    $page = str_replace('_user_', $user, $page);

    echo $page;
?>