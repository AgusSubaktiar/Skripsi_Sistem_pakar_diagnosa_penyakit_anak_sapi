<div class="container p-5">
    <a href="<?= base_url('data');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang : <?= $data->nama_penyakit;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('data/update');?>">
                <div class="form-group">
                    <label for="">Nama Penyakit</label>
                    <input type="text" value="<?= $data->nama_penyakit;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Gejala</label>
                    <input type="text" value="<?= $data->nama_gejala;?>" name="gejala" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">MB</label>
                    <input type="text" value="<?= $data->MB;?>" name="mb" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">MD</label>
                    <input type="text" value="<?= $data->MD;?>" name="md" required class="form-control">
                </div>
                <input type="hidden" value="<?= $data->id_basis;?>" name="id_basis">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>