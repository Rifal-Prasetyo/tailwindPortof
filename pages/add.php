<?php 
session_start();
require '../dist/controller/function.php';
if(!$_SESSION['koy']) {
    header('Location:log.php');
    exit;

}
$toast_succes = false;
if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        $toast_succes = true;
    } else {
        $toast_failed = true;
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
    <title>Nambah</title>
</head>
<body>
    <div class="container">
        <div class="mb-10">
            <div class="w-full mt-32  mb-4 bg-slate-600 rounded-xl p-5 lg:w-1/2 lg:mx-auto ">
                <h3 class="text-lg font-semibold text-center text-primary">Tambah blog</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="judul" class="text-base font-bold text-white">Judul</label>
                    <input type="text" name="judul" id="judul" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    <label for="content" class="text-base font-bold text-white">Konten</label>
                    <input type="text" name="content" id="content" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    <h4 class="text-base font-bold text-white mt-2">Kategori</h4>
                    <select name="category" id="category" class="bg-slate-300 mb-2 py-2 px-3 rounded-full">
                        <option value="progammer">Progammer</option>
                        <option value="fotografer">Fotografi</option>
                    </select>
                    <br>
                    <label for="photo" class="text-base font-bold text-white">gambar</label>
                    <input type="file" name="gambar" id="gambar" class="w-full mb-7 bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    <button name="submit" class="px-3 py-2 bg-primary text-center rounded-full hover:shadow-lg hover:text-red-500 text-white w-full">upload</button>
                </form>
            </div>

            <!-- toast info  -->
            <?php if($toast_succes) { ?>
                <div class="w-full bg-green-200 px-5 py-3 border border-green-500 rounded-md mb-3 lg:w-1/2 lg:mx-auto">
                    <div class="flex">
                        <h3 class="text-base text-slate-900 font-mono">Selamat, sudah berhasil upload, <a class="text-blue-800 underline" href="admin_panel.php">Kembali</a></h3>
                    </div>
                </div>
            <?php } ?>
            <?php if($toast_failed)  { ?>
                <div class="w-full bg-red-200 px-5 py-3 border border-red-500 rounded-md lg:w-1/2 lg:mx-auto">
                    <div class="flex">
                        <h3 class="text-base text-slate-900 font-mono">Gagal Upload :( </h3>
                    </div>
                </div>
            <?php } ?>
            <!-- toast info end  -->
        </div>
    </div>
</body>
</html>