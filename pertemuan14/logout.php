<?php

session_start();
session_destroy();


//header("Location : login.php");
var_dump(header("Location : login.php"));
exit;
?>