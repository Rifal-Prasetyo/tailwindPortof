<?php 
require '../dist/controller/function.php';
// if(!$_SESSION['koy']) {
//     header('Location: log.php');
//     exit;
// }
global $conn;
$id = $_GET['id'];
$judul = $_GET['judul'];
$pilih = $_GET['pilih']=== "a"? "portofolio_blog" : "portofolio_project";
$query = "DELETE FROM $pilih WHERE id LIKE '$id' AND judul LIKE '$judul'";
mysqli_query($conn, $query);
header('Location: admin_panel.php');
exit;
?>