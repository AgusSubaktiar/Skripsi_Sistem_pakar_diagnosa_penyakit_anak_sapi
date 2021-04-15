<div class="container p-5">
    <a href="<?= base_url('kode');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Gejala</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kode/add');?>">
                <div class="form-group">
                    <label for="">Kode Gejala</label>
                    <input type="text" name="kode" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Gejala</label>
                    <input type="text" name="nama_gejala" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>