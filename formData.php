<?php
session_start();
require 'dist/controller/function.php';
$nama = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['note']);
$date = date("d-m-Y h:i:s");
$query = "INSERT INTO portofolio_kontak VALUES (NULL, '$nama', '$email', '$pesan', '$date')";
mysqli_query($conn, $query);
header("Location: mailto:hrdsdms765@gmail.com?subject=RIFALKOM PORTOFOLIO-$nama&body=$esan");

// if(mysqli_affected_rows($conn) > 0 ) {
    
// } else {
//     echo "gagal";
// }
?>