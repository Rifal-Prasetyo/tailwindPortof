<?php
require '../dist/controller/function.php';
$id = $_GET['lihat'];
$blog = $_GET['saya'];
$hasil = query("SELECT * FROM portofolio_blog WHERE id LIKE '$id' AND judul LIKE '$blog'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
    <!-- header  -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center
    z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-3 ">
                <a href="#home" class="font-bold text-lg text-primary block py-3">RifalBogeng</a>
            </div>
            <div class="flex items-center px-3">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                        </li>
                        <li class="group">
                            <a href="#portofolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                        </li>
                        <li class="group">
                            <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Klien</a>
                        </li>
                        <li class="group">
                            <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                        </li>
                        <li class="group">
                            <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </header> 
    <!-- header end  -->
    <!-- blog  -->
    <div class="container" >
        <?php  foreach($hasil as $row) :?>
        <div class="w-full pb-16 pt-36 rounded-md"> 
            
            <div class="top-1 flex justify-center">
                <img src="../pages/img/<?= $row['gambar'] ?>" alt="" class="rounded-3xl p-4" srcset="">
            </div>
            <div class="w-full justify-center mt-5">
                <h3 class="font-bold text-sky-700 text-3xl text-center"><?= $row['judul'] ?></h3>
            </div>
            <div class="p-6">
                <p class="text-base text-slate-500 font-normal"><?= $row['isi'] ?></p>
            </div>
            <div class="w-full flex items-end justify-end">
                <!-- <button class="py-2 px-5 mr-6 bg-primary border  border-red-400 ml-5 rounded-full text-white text-base font-sans" onclick="close()">kembali

                </button> -->
            </div>
        </div>
        <?php endforeach ;?>
        
    </div>
    <!-- blog end  -->
    <script>
        function close() {
            window.open('', '_self', '');
            window.close();
        }
    </script>
    <script src="../dist/js/script.js"></script>
</body>
</html>