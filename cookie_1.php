<?php 
setcookie('nama', 'Muhammad Rifal Prasetyo', time()+248832000 , '/', 'rifalkom.my.id');
setcookie('jenisKelamin', 'Lakilaki', time()+248832000  , '/', 'rifalkom.my.id');  
setcookie('agama', 'Islam', time()+248832000 , '/', 'rifalkom.my.id');   
setcookie('ttl', '01-06-2006', time()+248832000 , '/', 'rifalkom.my.id');
setcookie('umur', '17', time()+248832000 , '/', 'rifalkom.my.id');
setcookie('alamat', 'Srikandang', time()+248832000 , '/', 'rifalkom.my.id');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php COOKIEE</title>
</head>
<body>
 
  
    <h3>Menampilkan Cookie</h3>
    <p>Nama : <span><?= $_COOKIE['nama'] ?></span></p><br>
    <p>Jenis Kelamin : <span><?= $_COOKIE['jenisKelamin'] ?></span></p><br>
    <p>Agama : <span><?= $_COOKIE['agama'] ?></span></p><br>
    <p>TTL : <span><?= $_COOKIE['ttl'] ?></span></p><br>
    <p>Umur : <span><?= $_COOKIE['umur'] ?></span></p><br>
    <p>alamat : <span><?= $_COOKIE['alamat'] ?></span></p><br><br>

    <p><a href="rifalkom.my.id">Ke rifalkom.my.id</a></p>
    
</body>
</html>