<?php 
session_start();
// unset diperlukan untuk memastikan session benar-benar hilang
session_unset();
session_destroy();


header('location: login.php');
exit;

?>