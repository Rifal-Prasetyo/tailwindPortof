<?php 
session_start();
if(!$_SESSION['masuk']) {
    header('Location:log.php');
} else {
    header('Location: admin_panel.php');
}
?>