<?php $this->extend('layouts/base') ?>

<?php $this->section('content'); ?>
<body>
  
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">SISTEM PAKAR <span class="w3-hide-small">DIAGNOSA PENYAKIT</span> ANAK SAPI</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">TENTANG APLIKASI</h3>
  <p class="w3-center"><em>Abstrak</em></p>
  <p>Sapi merupakan hewan ternak yang banyak memiliki potensi ekonomi yang cukup menjanjikan.
Penyakit pada hewan sapi dapat menular dengan cepat dan dapat berakibat kematian. Penyakit 
tersebut dapat disebabkan oleh bakteri, virus, jamur dan parasit. Untuk mencegah agar penyakit sapi 
tidak menular, maka pemilik sapi harus mengetahui terlebih dahulu mengenai penyakit-penyakit pada 
hewan sapi, sehingga dapat dilakukan pencegahan dan pengobatan terhadap hewan sapi sedini 
mungkin.
Sistem pakar adalah sebuah sistem yang dirancang untuk dapat menirukan keahlian seorang 
pakar dalam memecahkan suatu masalah yang ada. Pengetahuan mengenai penyakit hewan sapi 
disusun mengacu pada literatur dan wawancara dengan dokter hewan mengenai penyakit hewan sapi 
yang digunakan untuk mendiagnosa penyakit berdasarkan gejala penyakit serta cara penanganannya. 
Penentuan penyakit dalam sistem pakar ini dilakukan melalui proses konsultasi antara pengguna 
dengan sistem dan juga menggunakan metode Forward Chaining. Sistem akan menampilkan gejala gejala penyakit, kemudian pengguna memilih gejala yang dialami. Gejala yang dipilih pengguna akan 
disesuaikan dengan rule yang ada sehingga pengguna akan memperoleh hasil diagnosa berupa gejala, 
jenis penyakit dan solusi penangannannya. Diharapkan sistem pakar ini dapat memberikan informasi 
dan penanganan secara dini jika hewan sapi terdeteksi mengalami sakit.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Drh. M. Amriyan Nurakhman</b></p><br>
      <img src="img/foto.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="150" height="150">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">CONTACT ME</h3>
  <p class="w3-center"><em>Tuban Jawa Timur</em></p>
  <p class="w3-center"><em>Phone : +62 815-5586-3186</em></p>
  <p class="w3-center"><em>Email : mail@gmail.com</em></p>
    <!-- <div class="w3-content w3-container w3-padding-64">
      <div class="w3-content w3-container w3-padding-64">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-center"></i> Chicago, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-center"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-center"></i> Email: mail@mail.com<br>
      </div>
    </div>
  </div> -->
</div>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
<?php $this->endSection(); ?>