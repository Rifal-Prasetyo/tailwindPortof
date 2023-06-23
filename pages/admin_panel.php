<?php 
session_start();
require '../dist/controller/function.php';
if(!$_SESSION['masuk']) {
    header('Location: log.php');
    exit;
} 
$_SESSION['koy'] = true ;
$hasil = query('SELECT * FROM portofolio_project ORDER BY id DESC LIMIT 7');
$hasil_blog = query('SELECT * FROM portofolio_blog ORDER BY id DESC LIMIT 7');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>admin informasi</title>
</head>
<body>
    <div class="container mx-auto mb-3 mt-5">
        <div class="flex">
            <div class="w-full py-3 px-3 self-center bg-slate-100 rounded-lg">
                <h3 class=" text-base font-bold text-primary">Project</h3>
                <h4 class="font-light text-base text-blue-300">database Project</h4>
                <div class="border-[2px] border-primary m-3"></div>
                <table class="border-collapse border border-slate-300 px-3 text-xs" cellpadding="5" >
                    
                    <tr>
                        <th class="border border-slate-500">No.</th>
                      
                        <th class="border border-slate-500">judul</th>
                        <th class="border border-slate-500">konten</th>
                        <th class="border border-slate-500">gambar</th>
                        <th class="border border-slate-500">Tanggal</th>
                        <th class="border border-slate-500">Aksi</th>
                    </tr>
                    <?php $i = 1 ;?>
                    <?php foreach ($hasil as $row) : ?>
                    <tr>
                        <td class="border border-slate-700"><?php echo $i ?></td>
                        <td class="border border-slate-700"><?php echo $row['judul'] ?>mencoba</td>
                        <td class="border border-slate-700 "><?php echo $row['konten'] ?></td>
                        <td class="border border-slate-700"><img src="img/proj/<?php echo $row['gambar'] ;?>" alt="" srcset="" width="50"></td>
                        <td class="border border-slate-700"><?php echo $row['waktu'] ?></td>
                        <td class="border border-slate-700"><button class="px-3 py-2 bg-red-400 text-xs rounded-full hover:shadow-lg text-white"><a href="hapus.php?id=<?= $row['id']?>&judul=<?= $row['judul'] ?>&pilih=b"> hapus</a></button></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach ?>
                </table>
                <div class="border-[2px] border-secondary m-3"></div>
                <div class="flex flex-wrap"><a href="add_proj.php">
                    <button class="px-2 py-1.5 text-[0.5rem] bg-blue-500 text-blue-50 rounded-lg ml-4 hover:shadow-xl">tambah blog</button></a>
                </div>

            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex">
            <div class="w-full py-3 px-3 self-center bg-slate-100 rounded-lg">
                <h3 class=" text-base font-bold text-red-400">Blog</h3>
                <h4 class="font-light text-base text-blue-300">database Blog</h4>
                <div class="border-[2px] border-primary m-3"></div>
                <table class="border-collapse border border-slate-300 px-3 text-xs" cellpadding="5" >
                    <tr>
                        <th class="border border-slate-500">No.</th>
                        <th class="border border-slate-500">judul</th>
                        <th class="border border-slate-500">konten</th>
                        <th class="border border-slate-500">isi</th>
                        <th class="border border-slate-500">Kategori</th>
                        <th class="border border-slate-500">gambar</th>
                        <th class="border border-slate-500">Tanggal</th>
                        <th class="border border-slate-500">Aksi</th>
                    </tr>
                    <?php $ii= 1 ; ?>
                    <?php foreach ($hasil_blog as $row_blog) : ?>
                    <tr>
                        <td class="border border-slate-700"><?php echo $ii ?></td>
                        <td class="border border-slate-700"><?php echo $row_blog['judul']; ?></td>
                        <td class="border border-slate-700" width="30px"><?php echo $row_blog['konten'] ; ?></td>
                        <td class="border border-slate-700" width="30px"><?php echo $row_blog['isi'] ; ?></td>
                        <td class="border border-slate-700"><?php echo $row_blog['kategori']; ?></td>
                        <td class="border border-slate-700"><img src="img/<?php echo $row_blog['gambar'] ?>" alt="" srcset="" width="50"></td>
                        <td class="border border-slate-700"><?php echo $row_blog['gambar']?></td>
                        <td class="border border-slate-700"><button class="px-3 py-2 bg-red-400 text-xs rounded-full hover:shadow-lg text-white"><a href="hapus.php?id=<?= $row_blog['id']?>&judul=<?= $row_blog['judul'] ?>&pilih=a">hapus</a></button></td>
                        <?php endforeach ?>
                        <?php $ii++ ?>
                    </tr>
                </table>
                <div class="border-[2px] border-secondary m-3"></div>
                <div class="flex flex-wrap"><a href="add.php">
                    <button class="px-2 py-1.5 text-[0.5rem] bg-blue-500 text-blue-50 rounded-lg ml-4 hover:shadow-xl">tambah Blog</button></a>
                </div>

            </div>
        </div>
    </div>
    <div class="container mx-auto mt-10 mb-10 pb-11">
        <div class="w-full p-3 rounded-lg bg-slate-100">
            <h3 class="font-bold text-primary">Event</h3>
            <h2 class="font-light text-blue-300">Event akan ditampikan dibawah hero section</h2>
            <input type="radio" name="show" id="show" value="Ya"> Ya
            <input type="radio" name="show" id="show" value="Tidak"> Tidak
            <br>
            <label for="note"><input type="text" name="event" id="event" class="px-6 w-full border border-blue-500 bg-white rounded-full"></label>
            <button class="py-1 px-3 bg-blue-400 text-kecil_px hover:shadow-lg hover:border hover:border-red-500 rounded-lg mb-6">Pasang</button>
        </div>
    </div>
    <div class="container pb-10">
        <div class="w-full flex justify-center">
        <button class="py-1 px-6 text-dark bg-red-500 rounded-full"><a href="logout.php">keluar</a></button>
        </div>
    </div>
</body>
</html>