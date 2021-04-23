<?=$this->extend('layout/base');?>

<?=$this->section('content');?>

    <main role="main">
 
      <div id="demo" class="carousel slide" data-ride="carousel">
 
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/logoSapi.jpg" alt="Gambar - 1" width="100%" height="400">
      <div class="carousel-caption">
        <h3>SISTEM PAKAR DIAGNOSA PENYAKIT ANAK SAPI </h3>
        <p>INFORMASI PENJELASAN TENTANG PENYAKIT ANAK SAPI</p>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="assets/img/sapi1.jpg" alt="Gambar - 2" width="200" height="500">
      <div class="carousel-caption">
        <h3>Slide 2</h3>
        <p>Deskripsi Slide 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/sapi.jpg" alt="Gambar - 3" width="1280" height="700">
      <div class="carousel-caption">
        <h3>Slide 3</h3>
        <p>Deskripsi Slide 3</p>
      </div>
    </div>
  </div> -->
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
	<div class="container post mt-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/BEF.jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Bovine Ephemeral Fever (BEF)</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" href="<?= base_url('detail');?>" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-2 box-shadow">
                <img class="card-img-top" src="assets/img/Colibacillosis.jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Colibacillosis</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/Helmanthiasis.jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Helmanthiasis</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/Scabies.jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Scabies</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/Omphalitis (Radang pusar).jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Omphalitis (Radang pusar)</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/Tetanus.jpg" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Tetanus</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                      </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/Myasis.png" alt="Card image cap" width="100%" height="200">
                <div class="card-body">
                  <p class="card-text">Myasis</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button> -->
                      <a href="<?= base_url('detail');?>" class="btn btn-primary btn-block">Detail</a>
                      </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
 
 
            
        </div>
        </div>
        </main>
 
 
      
 
 
      <!-- FOOTER -->
      <!-- <footer class="container">
        <p style="text-align: center;">&copy; 2017-2018 Warung Belajar </p>
      </footer>
     -->
  </body>
</html>
<?=$this->endSection('');?>