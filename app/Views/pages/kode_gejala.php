<div class="container pt-5">
    <a href="<?= base_url('kode/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <a href="<?= base_url('pages');?>" class="btn btn-success mb-2">Kembali</a>
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
                                    <a href="<?= base_url('kode/edit/'.$isi['id_basis']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('kode/hapus/'.$isi['id_basis']);?>" 
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