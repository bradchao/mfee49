<?php
    date_default_timezone_set('Asia/Taipei');
    $dirtext = 'dir1';
    $dir = opendir($dirtext);
?>
<table border='1' width='100%'>
    <?php
        while ( $file = readdir($dir)){
            echo '<tr>';
            echo "<td>{$file}</td>";
            if (is_dir("{$dirtext}/{$file}")){
                echo "<td>Dir</td>";
            }else if (is_file("{$dirtext}/{$file}")){
                echo "<td>File</td>";
            }
            $size = filesize("{$dirtext}/{$file}");
            echo "<td align='right'>{$size} bytes</td>";
            
            $mtime = date('Y-m-d H:i:s' , filemtime("{$dirtext}/{$file}"));
            echo "<td align='center'>{$mtime}</td>";
            echo '</tr>';
        }    
    ?>
</table>
<?php
closedir($dir);
?>