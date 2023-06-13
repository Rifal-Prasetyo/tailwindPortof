//navbar fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}


//hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
})

// toast musik info
 // Fungsi untuk memunculkan div setelah delay 5 detik
 function showDiv() {
    var div = document.getElementById("tampil");
    div.classList.remove('hidden');
    div.classList.add('toast_active');
  }

//   //Text SLice 
//   var paragraf = document.getElementById('paragrafFFF');
//   var text = paragraf.innerText ;

//   if(text.length > 100) {
//     var teksPendek = teks.slice(0, 100)+ "...";
//     paragraf.innerText = teksPendek;
//   }
  
  // pop up
  window.onload = function() {
    document.querySelector('.popup').style.display = 'block';
    // Membuat elemen audio
    var musikArray = [{title: 'Heat Waves(Japanese Cover By Lime)', file: 'music/music.mp3'},
    {title: 'ARCANA PROJECT『夢で世界を変えるなら', file: 'music/ARCANA.mp3'}, {title: 'Maaya Sakamoto - Waiting For the Rain', file: 'music/rain.mp3'}, {title: 'Soegi Bornean - Asmalibrasi', file: 'music/Asmalibrasi.mp3'}, {title: 'CUPID - FIFTY FIFTY SPPED UP', file: 'music/FIFTY_FIFTY_SPEED.mp3'}, {title: 'Kimi No Toriko', file: 'music/kimiNoToriko.mp3'}, {title: 'DJ Dabel Ring Ring You {OST HIGEHIRO}', file: 'music/RING_RING_YOU.mp3'}, {title: 'Sholawat Habib Syeckh - Sholatumm bissala...', file: 'music/sholawat1.mp3'} ];
    var songInfo = document.getElementById('song');
    // Mendapatkan referensi tombol play
    var playButton = document.getElementById('playB');
    
    // Mendefinisikan fungsi untuk memutar musik
    var randomIndex = Math.floor(Math.random() * musikArray.length);
    function playMusic() {
        var randomSong = musikArray[randomIndex];
        var audio = new Audio(randomSong.file);
        audio.play();
        songInfo.textContent = randomSong.title;
        audio.addEventListener('ended', nextSong);
    }
    // ganti lagu ketika lagu selesai
        var defaultMusic = randomIndex;
    function nextSong() {
        defaultMusic++;
        if(defaultMusic >= musikArray.length) {
            defaultMusic = 0;
        }
        var next = musikArray[defaultMusic];
        var audio = new Audio(next.file);
        audio.src = next.file;
        audio.play();
        songInfo.textContent = next.title;
        audio.addEventListener('ended', nextSong);

    }

    // fungsi nextSong
    
    // Menambahkan event listener ke tombol play
    // playButton.addEventListener('click', playMusic);
            document.getElementById('closeBtn').addEventListener
            ('click', function() {
                playMusic();
                setTimeout(showDiv, 5000);
                document.querySelector('.popup').style.display = 'none';
            });
        };
    
// kontak konfigurasi

 function kontak() {
    const name_ct = document.querySelector('#name_contact').value;
    const email_ct = document.querySelector('#email_contact').value;
    const note_ct = document.querySelector('#note_contact').value;

    window.location.href(`mailto:hrdsdms765@gmail.com?subject=RIFALKOM PORTOFOLIO - ' + ${name_ct} + '&body=' + `)
 }
