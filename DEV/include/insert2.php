<?php
session_start();

$_SESSION['band'] = $_POST['band_name'];

?>
<a href='../userhome.php'>HOME</a>
