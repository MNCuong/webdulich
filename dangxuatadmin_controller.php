<?php
session_name('admin');

session_start(); 
if(isset($_SESSION['useradmin'])) {
    session_destroy();
}
header('Location: dangnhapadmin.php');
exit();
?>
