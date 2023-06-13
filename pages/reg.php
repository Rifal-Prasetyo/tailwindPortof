<?php
session_start();
require '../dist/controller/function.php';
$toast_succes = false;
if(isset($_POST['submit'])) {
    if( registrasi($_POST) > 0) {
        $toast_succes = true ;
        $_SESSION['masuk'] = true ;
    }
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
    <div class="container py-32"> 
       <div class="w-full px-4 py-3 mx-auto bg-slate-500 rounded-lg">
            <div class="w-full mx-auto text-center">
                <h3 class="font-semibold text-lg text-primary">Register</h3>
                <p class="font-extralight text-white md:text-lg">masukkan inf registrasi kamu rifal</p>
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
                        <button type="submit" name='submit' class="te items-center text-base font-semibold text-white bg-primary py-3 px-2 rounded-md w-1/2 hover:opacity-50 hover:shadow-md transition duration-500 ease-in-out">kirim</button>
                    </div>
                </div>
            </form>
       </div>
       <!-- toast info  -->
    <?php if($toast_succes) { ?>    
     <div class="w-full bg-green-200 px-5 py-3 border border-green-500 mt-10 rounded-md mb-3 lg:w-1/2 lg:mx-auto">
        <div class="flex">
            <h3 class="text-base text-slate-900 font-mono">Selamat, masuk ke database, <a href="admin_panel.php" class="underline">klik disini </a></h3>
        </div>
    </div>
    <?php } ?>
    <?php if(isset($toast_succes) !== true) { ?>
    <div class="w-full bg-red-200 px-5 py-3 border border-red-500 rounded-md lg:w-1/2 lg:mx-auto">
        <div class="flex">
            <h3 class="text-base text-slate-900 font-mono">Username / password salah </h3>
        </div>
    </div>
    <?php } ?>
    <!-- toast info end  -->
    </div>
    
        <?php if($toast_succes) { ?>
     <script> 
    function redirect() {
        window.location.href('admin_panel.php');
    }
    setTimeout(redirect(), 3000)
    </script>
    <?php } ?>
</body>
</html>