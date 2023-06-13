<?php 
$conn = mysqli_connect("localhost", "root", "", "mencoba");


	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	} 

	function registrasi($data) {
		global $conn;
		$username = strtolower(stripcslashes($data["user"]));
		$password = mysqli_real_escape_string($conn, $data["pass"]);
		$password2 = mysqli_real_escape_string($conn, $data["pass"]);
		
		// cek apakah sudah ada yang punya akun sama
	  $result = mysqli_query($conn, "SELECT user FROM portofolio_admin WHERE user = '$username'");
	  if (mysqli_fetch_assoc($result)) {
		echo "<script>
			  alert('Username ddigunakan'
			  </script>";
		return false;
	  }
		// cek konfirmasi password 
		if ($password !== $password2){
		  echo "<script> 
			  alert('Password konfirmasi tidak ssesuai')
			   </script>";
		  return false;
		}
		
		
		// enkripsi password
	  $password = password_hash($password, PASSWORD_DEFAULT);
	  
	  
	  // Insert ke Databas
	  mysqli_query($conn, "INSERT INTO portofolio_admin VALUES (NULL , '$username', '$password')");
	  return mysqli_affected_rows($conn);
	  }
	
	function tambah($data) {
		global $conn;
	$judul = htmlspecialchars($data["judul"]);
	$konten = htmlspecialchars($data["content"]);
	$kategori = htmlspecialchars($data["category"]);
	$waktu = date('d-m-Y h:i:s');
	$alias = md5($judul);
	


	// uplad gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO portofolio_blog 
	VALUES 
	(NULL, '$judul', '$konten', '$kategori', '$gambar', '$waktu', '$alias')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	}


	function upload() {
		var_dump($_FILES);
		$namafile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name']; 
		 if ($error === 4) {
		 	echo "<script>
		 		alert('pilih gmbar dahulu');
		 		</script>";
		 	return false; 
		 }
		$ektensiGambarValid = ['jpg', 'jpeg', 'png', 'bmp', 'webp'];  
		$ekstensiGambar =  explode( '.', $namafile);
		$ekstensiGambar =  strtolower(end($ekstensiGambar));
		if (!in_array($ekstensiGambar, $ektensiGambarValid) ) {
			echo "<script>
				alert('yang anda masukkan bukan gambar')
				</script>";
			return false;
		}
		if( $ukuranFile > 1000000) {
			echo "<script>
				alert('ukuran gambar terlalu besar')
				</script>";
			return false;
		}
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar; 


		move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
			return $namaFileBaru;

	}
	function tambah_project($data) {
		global $conn;
	$judul = htmlspecialchars($data["judul"]);
	$konten = htmlspecialchars($data["content"]);
	$waktu = date('d-m-Y h:i:s');
	


	// uplad gambar
	$gambar = upload_blog();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO portofolio_project 
	VALUES 
	(NULL, '$judul', '$konten', '$gambar', '$waktu')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	}


	function upload_blog() {
		var_dump($_FILES);
		$namafile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name']; 
		 if ($error === 4) {
		 	echo "<script>
		 		alert('pilih gmbar dahulu');
		 		</script>";
		 	return false; 
		 }
		$ektensiGambarValid = ['jpg', 'jpeg', 'png', 'bmp', 'webp'];  
		$ekstensiGambar =  explode( '.', $namafile);
		$ekstensiGambar =  strtolower(end($ekstensiGambar));
		if (!in_array($ekstensiGambar, $ektensiGambarValid) ) {
			echo "<script>
				alert('yang anda masukkan bukan gambar')
				</script>";
			return false;
		}
		if( $ukuranFile > 1000000) {
			echo "<script>
				alert('ukuran gambar terlalu besar')
				</script>";
			return false;
		}
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar; 


		move_uploaded_file($tmpName, 'img/proj/'.$namaFileBaru);
			return $namaFileBaru;

	}
  ?>