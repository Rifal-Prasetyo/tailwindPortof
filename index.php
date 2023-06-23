
<?php 

require 'dist/controller/function.php';
$hasil = query('SELECT * FROM portofolio_project ORDER BY id DESC');
$hasil_dua = query('SELECT * FROM portofolio_blog ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="eSR7FUifzWKzRxHD1jky9AmlXbU4DUAv9mj02MuDWMg" />
    <meta property="og:title" content="Rifal Portofolio | Website First " />
    <meta property="og:description" content="Portofolio website pertamaku" />
    <meta property="og:image" content="https://rifalkom.my.id/thumbnail.jpg"/>   
    <title>Portofolio M Rifal Prasetyo</title>
    <link rel="stylesheet" href="dist/output.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        /* CSS untuk popup */
.popup {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #ffffff;
			padding: 20px;
			border: 1px solid #cccccc;
			box-shadow: 0px 0px 10px #cccccc;
			z-index: 9999;
			display: none;
		}
    </style>
</head>
<body style="scroll-behavior: smooth;">
    <!-- pop up  -->
    <div class="popup rounded-lg py-4 px-4">
		<h2 class="font-bold text-primary underline-offset-1">Selamat Datang!</h2>
		<p class="mb-12">Terima kasih telah mengunjungi website saya</p>
		<button id="closeBtn" class="px-4 py-1 bg-blue-300 text-dark border border-blue-500 rounded-full text-center">Tutup</button>
	</div>
    <!-- pop up end  --> 
    <!-- header menu start-->
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
    <!-- header menu end -->
    <!-- hero section start -->
    <section id="home" class="pt-26 max-[640px]:pt-28">
        <div class="container mx-auto">
            <div class="flex flex-wrap ">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua✋,Saya <span class="block font-bold text-dark text-4xl mt-2 lg:text-5xl"> Muhammad Rifal Prasetyo</span></h1>
                    <h2 class="font-medium text-slate-400 text-lg mb-5 lg:text-2xl"> Pelajar | <span class="text-dark">Belajar</span></h2>
                    <p class="font-medium text-slate-400 mb-3 leading-relaxed">disini saya belajar web progamming coy. dan apakah belajar web itu menyenangkan? <span class="text-dark font-bold">bukan!!!</span></p>
                    <div class="w-1/3 border border-dark mb-4 "></div>
                    <div class="flex flex-wrap ">
                        <a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 mr-4 rounded-full max-[620px]:text-ekstra_kecil max-[620px]:py-3 max-[620px]:px-6 max-[620px]:mr-3  hover:shadow-lg  
                        hover:opacity-75 transition duration-300 ease-in-out">Hubungi Saya</a>
                        <a href="https://bogeng.skom.id"  class="text-base font-semibold text-white bg-secondary_btn py-3 px-8 mr-4 rounded-full max-[620px]:text-ekstra_kecil max-[620px]:py-3 max-[620px]:px-6 max-[620px]:mr-3  hover:shadow-lg  
                        hover:opacity-75 transition duration-300 ease-in-out">Bogeng Site</a>
                    </div>
                    <div class="hidden transition duration-200 ease-in-out" id="tampil">
                        <div class="pl-4 w-2 bg-orange-200"><i data-feather="music" class=" text-center items-center absolute "></i></div><marquee class="font-light text-dark text-center w-full px-2" id="song"></marquee>
                    </div>
                </div>
                <div class="w-full self-end px-4 pb-36 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="dist/rifal.webp" alt="aku" srcset="" class="max-w-full mx-auto ">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg viewBox="0 0 200 200" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6" d="M63.7,-52.1C80.4,-47.1,90.2,-23.5,83.6,-6.5C77.1,10.4,54.2,20.9,37.5,33.8C20.9,46.8,10.4,62.2,0.4,61.8C-9.6,61.5,-19.3,45.2,-28.5,32.2C-37.6,19.3,-46.3,9.6,-47.8,-1.5C-49.3,-12.6,-43.6,-25.3,-34.4,-30.3C-25.3,-35.3,-12.6,-32.7,5.4,-38.1C23.5,-43.5,47.1,-57.1,63.7,-52.1Z" transform="translate(100 100) scale(1,1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- hero section end -->
    <!-- event ssection start  -->
    <section class=" pt-3">
        <div class="container mx-auto  bg-orange-300 ">mencoba  </div>
    </section>
    <!-- event ssection end  -->
   
   
    <!-- About section start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md  lg:text-4xl" >Saya Belajar di Sekolah Menengah Kejuruan Negeri 1 Bangsri</h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">saya mengambil jurusan Rekayasa Perangkat lunak dengan bidik keahlian di Backend Developer</p>
                </div>
                <div class="w-full px-4 mb-10  lg:w-1/2 ">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari berteman</h3>
                    <p class="mb-6 font-medium text-base text-slate-500 lg:text-lg" >Saya memiliki beberapa akun sosmed, sebagian jarang online</p>
                    <div class="flex items-center">
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/@muhammadrifalprasetyo5131" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/rifal_prasetyo76" target="_blatnk" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com/rifal.chayang.rasyid" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- About section end  -->
    <!-- Portofolio section start  -->
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2"> Portofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project saya</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Saya sudah membuat beberapa project dari saya sendiri dan kerjasama dengan <a href="https://bogeng.skom.id" class="text-blue-600 underline">Bogeng Members</a></p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12
            xl:mx-auto">
                <?php foreach ($hasil as $row) : ?>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="pages/img/proj/<?php echo $row['gambar'] ;?>" alt="landing-page" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3"><?php echo $row['judul'] ;?></h3>
                    <p id="paragrafFFF" class="text font-medium text-base text-secondary text-ellipsis overflow-hidden"><?= $row['konten'] ;?></p>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- Portofolio section end  -->

    <!-- Klien Section Start  -->
    <section id="clients" class="pt-36 pb-32 bg-slate-900">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2"> Klien</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang pernah bekerja sama</h2>
                    <p class="font-medium text-md text-secondary md:text-lg text-slate-200">Sebelumnya untuk bagian ini masih tahap validasi,icon hanya pemanis</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="http://" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="dist/img/klien/Google_ G _Logo.svg.png" alt="Google">
                    </a>
                    <a href="http://" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="dist/img/klien/Google_ G _Logo.svg.png" alt="Google">
                    </a>
                    <a href="http://" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="dist/img/klien/Google_ G _Logo.svg.png" alt="Google">
                    </a>
                    <a href="http://" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0    lg:mx-6 xl:mx-8">
                        <img src="dist/img/klien/Google_ G _Logo.svg.png" alt="Google">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Klien Section end  -->


    <!-- Blog section start  -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2"> Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Saya</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">kamu dapat melihat beberapa blog yang saya upload dengan mengklik <span class="text-green-400 font-bold">Baca Selengkapnya</span></p> 
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3 mb-5">
                    <?php foreach ($hasil_dua as $row_dua) :?>
                    <div class="bg-white rounded-xl shadow-lg mg-10 overflow-hidden mb-5">
                        <img src="pages/img/<?= $row_dua['gambar'] ;?>" srcset="" class="w-full">
                        <div class="py-8 px-6">
                            <h3 class="block mb-3 font-semibold text-xl text-primary hover:text-blue-400 truncate"><?= $row_dua['judul'] ;?></h3>
                            <?php if($row_dua['kategori'] == 'progammer') { ?>  
                            <h1 class="py-1 px-4 bg-red-500 shadow-md rounded-md font-mono opacity-50 mb-4 w-1/4 text-xs" ><?= $row_dua['kategori'] ?></h1>
                            <?php } else { ?> 
                                <h1 class="py-1 px-4 bg-blue-400 shadow-md rounded-md font-mono opacity-50 mb-4 w-1/4 text-xs" ><?= $row_dua['kategori'] ?></h1>
                            <?php } ?>
                            <p id="paragrafFFF" class="font-medium text-secondary text-base mb-6 mt-3 text-ellipsis overflow-hidden"><?= $row_dua['konten'] ;?></p>
                            <a href="pages/blog.php?lihat=<?= $row_dua['id'];?>&saya=<?= $row_dua['judul'] ;?>" target="_blank" class="font-medium bg-primary py-2 px-4 text-white rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- Blog section end  -->

    <!-- kontak section start  -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2"> Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi saya</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Anda dapat menghubungi saya untuk keperluan bisnis disini</p>
                </div>
            </div>
            <form action="formData.php" method="post">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input max="100px" min="10px" type="text" name="name" id="name_contact" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>  
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Email</label>
                        <input max="100px" min="10px" type="text" name="email" id="email_contact" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>  
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Pesan</label>
                        <textarea max="100px" min="10px" type="text" name="note" id="note_contact" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"> </textarea>
                    </div>  
                    <div  class="w-full">
                        <button name="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Kontak section end  -->

    <!-- footer section start  -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Rifal</h2>
                    <h3 class="font-bold text-2xl" >Hubungi Saya</h3>
                    <p><a href="mailto:hrdsdsms765@gmail.com" class="font-bold text-blue-400">hrdsdms765@gmail.com</a></p>
                    <p>Jl. Srikandang Bangsri Jepara</p>
                    <p>Jateng</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori tulisan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="http://" class="inline-block text-base hover:text-primary mb-3">Progamming</a>
                        </li>
                        <li>
                            <a href="http://" class="inline-block text-base hover:text-primary mb-3">Fotografi</a>
                        <!-- </li>
                        <li>
                            <a href="http://" class="inline-block text-base hover:text-primary mb-3">Desain</a>
                        </li>
                        <li>
                            <a href="http://" class="inline-block text-base hover:text-primary mb-3">Terserah</a>
                        </li> -->
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="inline-block text-base hover:text-primary mb-3">Portofolio</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block text-base hover:text-primary mb-3">Clients</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-800 ">
                <div class="flex items-center justify-center mb-5">
                    <!-- Youtube --> 
                    <a href="https://www.youtube.com/@muhammadrifalprasetyo5131" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-dark">
                        <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com/rifal_prasetyo76" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-dark">
                        <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://facebook.com/rifal.chayang.rasyid" target="_blank" class="w-9  h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-dark">
                        <svg role="img" viewBox="0 0 24 24" width="20" class="fill-current" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
                <p class="font-medium text-sm text-slate-500 text-center">
                    Dibuat oleh <a href="https://instagram.com/rifal_prasetyo76" class="text-primary"> Muhammad Rifal Prasetyo </a>, diajari pak Shandika,mengggunakan  <a href="https://tailwindcss.com " class="text-red_magic"><span class="text-red-400"></span> Tailwind CSS 3 </span></a>

                </p>
            </div>
        </div>
    </footer>
    <!-- footer section end  -->
    <script>
        feather.replace()
    </script>
    <script src="dist/js/script.js"></script>
</body>
</html>