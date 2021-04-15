<div class="container p-5">
    <a href="<?= base_url('data');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('data/add');?>">
                <div class="form-group">
                    <label for="">Nama Penyakit</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Gejala</label>
                    <input type="text" name="gejala" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">MB</label>
                    <input type="text" name="mb" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">MD</label>
                    <input type="text" name="md" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>