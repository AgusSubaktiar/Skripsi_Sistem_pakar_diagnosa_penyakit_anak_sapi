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
                                    <!-- <a href="<?= base_url('kode/edit/'.$isi['id_kode']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('kode/hapus/'.$isi['id_kode']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a> -->
                                    <select id="cars">
                                    <option value="sangatyakin">Sangat Yakin</option>
                                    <option value="yakin">Yakin</option>
                                    <option value="cukupyakin">Cukup Yakin</option>
                                    <option value="sedikityakin" selected>Sedikit Yakin</option>
                                    <option value="tidaktahu" selected>Tidak Tahu</option>
                                    <option value="tidak" selected>tidak</option>
                                    <option value="pilih jawaban" selected>Pilih keyakinan</option>
                                    </select>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>