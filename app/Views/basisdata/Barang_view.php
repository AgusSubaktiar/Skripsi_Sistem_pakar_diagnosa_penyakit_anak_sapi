<?=$this->extend('layout/base');?>

<?=$this->section('content');?>

<div class="container">
    <a href="<?= base_url('data/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
    <a href="<?= base_url('pages');?>" class="btn btn-info mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Basis Pengetahuan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Penyakit</th>
                            <th>Nama Gejala</th>
                            <th>MB</th>
                            <th>MD</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getData as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_penyakit'];?></td>
                                <td><?= $isi['nama_gejala'];?></td>
                                <td><?= $isi['MB'];?></td>
                                <td><?= ($isi['MD']);?></td>
                                 <td>
                                    <a href="<?= base_url('data/edit/'.$isi['id_basis']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('data/hapus/'.$isi['id_basis']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

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