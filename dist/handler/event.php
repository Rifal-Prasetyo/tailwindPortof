<?php 
require '../controller/function.php';
$kondisi = $_POST['show'];
$isi = $_POST['event'];
mysqli_query($conn, "INSERT INTO portofolio_event VALUES ('$kondisi', '$isi')");


if(mysqli_affected_rows($conn) > 0) {
    echo "berhasil";
} else {
    echo "gagal";
}


?>