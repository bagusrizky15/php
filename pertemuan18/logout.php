<?php
session_start();
session_destroy();
echo "Kamu sudah keluar";
header("Location:login.php");
exit;


?>