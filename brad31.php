<?php
    $fname = $_GET['fname']; $data = $_GET['data'];

    $fp = fopen("dir1/{$fname}", 'w');
    fwrite($fp, $data);
    fclose($fp);

    //header("location: dir1/{$fname}");
?>
<script>
    window.location.href = '<?php echo "dir1/{$fname}"; ?>'
</script>