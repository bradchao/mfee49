<?php
    include 'bradapis.php';
    session_start();

    if (!isset($_SESSION['member'])) header('Location: brad43.php');
    $member = $_SESSION['member'];
?>
<h1>Brad Big Company</h1>
<hr />
Main Page<br />
Hello, <?php echo $member->getName(); ?> / <?php echo $member->getAccount(); ?>
<hr />
<a href="logout.php">Logout</a>