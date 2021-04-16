<div class="container p-5">
    <a href="<?= base_url('kode');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Gejala : <?= $data->kode_gejala;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kode/update');?>">
                <div class="form-group">
                    <label for="">Kode Gejala</label>
                    <input type="text" value="<?= $data->kode_gejala;?>" name="kode" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Gejala</label>
                    <input type="text" value="<?= $data->nama_gejala;?>" name="nama_gejala" required class="form-control">
                </div>
                <input type="hidden" value="<?= $data->id_kode;?>" name="id_kode">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>