<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Kode_model;

class Kode extends Controller
{
    public function index()
    {
        $model = new Kode_model();
        $data['title']     = 'Basis Data';
        $data['getData'] = $model->getData();
        echo view('pages/header_view', $data);
        echo view('pages/kode_view', $data);
        echo view('pages/footer_view', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Basis Data';
        echo view('pages/header_view', $data);
        echo view('pages/tambah_kode', $data);
        echo view('pages/footer_view', $data);
    }
    public function add()
    {
        $model = new Kode_model;
        $data = array(
            'kode_gejala' => $this->request->getPost('kode'),
            'nama_gejala'         => $this->request->getPost('nama_gejala')
        );
        $model->saveData($data);
        echo '<script>
                alert("Sukses Tambah Data Barang");
                window.location="'.base_url('kode').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Kode_model;
        $getData = $model->getData($id)->getRow();
        if(isset($getData))
        {
            $data['data'] = $getData;
            $data['title']  = 'Edit '.$getData->nama_kode;

            echo view('pages/header_view', $data);
            echo view('pages/edit_kode', $data);
            echo view('pages/footer_view', $data);

        }else{

            echo '<script>
                    alert("ID kode '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kode').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Kode_model;
        $id = $this->request->getPost('id_kode');
        $data = array(
            'kode_gejala' => $this->request->getPost('kode'),
            'nama_gejala'         => $this->request->getPost('nama_gejala')
        );
        $model->editData($data,$id);
        echo '<script>
                alert("Sukses Edit Data Barang");
                window.location="'.base_url('kode').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Kode_model;
        $getData = $model->getData($id)->getRow();
        if(isset($getData))
        {
            $model->hapusData($id);
            echo '<script>
                    alert("Hapus Data Barang Sukses");
                    window.location="'.base_url('kode').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID barang '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kode').'"
                </script>';
        }
    }
}