<?php
require("constants.php");

$link = mysqli_connect($dbHost,$dbUser, $dbPass) or die(mysqli_error());
mysqli_select_db($link,$dbName ) or die("Cannot select DB");

?>