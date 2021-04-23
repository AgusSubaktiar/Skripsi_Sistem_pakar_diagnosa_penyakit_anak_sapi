<?=$this->extend('layout/base');?>

<?=$this->section('content');?>

<div class="container">
    <!-- <a href="<?= base_url('konsul/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
    <a href="<?= base_url('pages');?>" class="btn btn-info mb-2">Kembali</a> -->
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Table Data Gejala</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getData as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['kode_gejala'];?></td>
                                <td><?= $isi['nama_gejala'];?></td>
                                <td>
                                    
                                    <input type="checkbox" name="check_list[]" alt="Checkbox" value="merah"> YA
		                            <input type="checkbox" name="check_list[]" alt="Checkbox" value="kuning"> TIDAK
		                            
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection('');?>