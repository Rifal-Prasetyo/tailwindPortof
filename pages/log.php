<?php 
session_start();
require '../dist/controller/function.php';
if($_SESSION['masuk']) {
    header('Location: admin_panel.php');
}

if (isset($_POST["login"])) {

	$username = $_POST["user"];
	$password = $_POST["pass"];

	$result = mysqli_query($conn, "SELECT * FROM portofolio_admin WHERE user = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {


		// cek password

		$row = mysqli_fetch_assoc($result);
		if ( password_verify($password, $row["pass"])) {
			
			// set session
			$_SESSION["login"] = true;
            $_SESSION['masuk'] = true;
			header("location: admin_panel.php");
			exit;
		}
	} 

	$error = true;

}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Admin Page untuk RifalKom</title>
</head>
<body>

    <div class="container py-32 p"> 
       <div class="w-full px-4 py-3 mx-auto bg-slate-500 rounded-lg">
            <div class="w-full mx-auto text-center">
                <h3 class="font-semibold text-lg text-primary">Login ke Admin</h3>
                <p class="font-extralight text-white md:text-lg">masukkan informasi login kamu</p>
            </div>
            <form action="" method="POST">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="user" class="text-base font-semibold text-primary">Username</label>
                        <input type="text" name="user" id="user" class="w-full bg-slate-300 text-dark p-3 rounded-lg focus:outline-none focus:ring-black focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="user" class="text-base font-semibold text-primary">password</label>
                        <input type="password" name="pass" id="user" class="w-full bg-slate-300 text-dark p-3 rounded-lg focus:outline-none focus:ring-black focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full justify-center">
                        <button type="submit" name='login' class="te items-center text-base font-semibold text-white bg-primary py-3 px-2 rounded-md w-1/2 hover:opacity-50 hover:shadow-md transition duration-500 ease-in-out">kirim</button>
                    </div>
                </div>
            </form>
       </div>
       <!-- toast info  -->
     <!-- <div class="w-full bg-green-200 px-5 py-3 border border-green-500 mt-10 rounded-md mb-3 lg:w-1/2 lg:mx-auto">
        <div class="flex">
            <h3 class="text-base text-slate-900 font-mono">Selamat, masuk ke database</h3>
        </div>
    </div>
    <div class="w-full bg-red-200 px-5 py-3 border border-red-500 rounded-md lg:w-1/2 lg:mx-auto"> -->
        <?php if($error) { ?>
        <div class="flex">
            <h3 class="text-base text-slate-900 font-mono">Username / password salah </h3>
        </div>
        <?php } ?>
    </div>
    <!-- toast info end  -->
    </div>
     
</body>
</html>