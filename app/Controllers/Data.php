<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Data_model;

class Data extends Controller
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new Data_model();
        $data['title']     = 'Basis Data';
        $data['getData'] = $model->getData();
        // echo view('basisdata/header_view', $data);
        return view('basisdata/barang_view', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Basis Data';
        echo view('basisdata/header_view', $data);
        echo view('basisdata/tambah_view', $data);
        echo view('basisdata/footer_view', $data);
    }
    public function add()
    {
        $model = new Data_model;
        $data = array(
            'nama_penyakit' => $this->request->getPost('nama'),
            'nama_gejala'         => $this->request->getPost('gejala'),
            'mb'  => $this->request->getPost('mb'),
            'md'  => $this->request->getPost('md')
        );
        $model->saveData($data);
        echo '<script>
                alert("Sukses Tambah Data ");
                window.location="'.base_url('data').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Data_model;
        $getData = $model->getData($id)->getRow();
        if(isset($getData))
        {
            $data['data'] = $getData;
            $data['title']  = 'Edit '.$getData->nama_penyakit;

            echo view('basisdata/header_view', $data);
            echo view('basisdata/edit_view', $data);
            echo view('basisdata/footer_view', $data);

        }else{

            echo '<script>
                    alert("ID basis '.$id.' Tidak ditemukan");
                    window.location="'.base_url('basis').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Data_model;
        $id = $this->request->getPost('id_basis');
        $data = array(
            'nama_penyakit' => $this->request->getPost('nama'),
            'nama_gejala'         => $this->request->getPost('gejala'),
            'mb'  => $this->request->getPost('mb'),
            'md'  => $this->request->getPost('md')
        );
        $model->editData($data,$id);
        echo '<script>
                alert("Sukses Edit Data ");
                window.location="'.base_url('data').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Data_model;
        $getData = $model->getData($id)->getRow();
        if(isset($getData))
        {
            $model->hapusData($id);
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('data').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID barang '.$id.' Tidak ditemukan");
                    window.location="'.base_url('data').'"
                </script>';
        }
    }
}