<?php
// logout functions using sessions
session_start();
session_destroy();
header("location:index.php");

?>
