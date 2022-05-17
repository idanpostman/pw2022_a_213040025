<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// untuk menghapus cookie
setcookie('id', '', time() - 3600);
setcookie('id', '', time() - 3600);

header("location: login.php");
exit;
?>