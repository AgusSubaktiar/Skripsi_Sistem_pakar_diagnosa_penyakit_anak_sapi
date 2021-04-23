<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Konsul_model;

class Konsultasi extends Controller
{
    public function index()
    {
        $model = new Konsul_model();
        $data['title']     = 'Data Kode';
        $data['getData'] = $model->getData();
        // echo view('gejala/header_view', $data);
      
        return view('konsultasi/konsul_view',$data); 
        
        
        
    }
    // public function tambah()
    // {
    //     $data['title']     = 'Tambah Data Kode';
    //     echo view('gejala/header_view', $data);
    //     echo view('gejala/tambah_kode', $data);
    //     echo view('gejala/footer_view', $data);
    // }
    // public function add()
    // {
    //     $model = new Konsul_model;
    //     $data = array(
    //         'kode_gejala' => $this->request->getPost('kode'),
    //         'nama_gejala'         => $this->request->getPost('nama_gejala')
    //     );
    //     $model->saveData($data);
    //     echo '<script>
    //             alert("Sukses Tambah Data Kode");
    //             window.location="'.base_url('kode').'"
    //         </script>';
    // }

    // public function edit($id)
    // {
    //     $model = new Konsul_model;
    //     $getData = $model->getData($id)->getRow();
    //     if(isset($getData))
    //     {
    //         $data['data'] = $getData;
    //         $data['title']  = 'Edit '.$getData->kode_gejala;

    //         echo view('gejala/header_view', $data);
    //         echo view('gejala/edit_kode', $data);
    //         echo view('gejala/footer_view', $data);

    //     }else{

    //         echo '<script>
    //                 alert("ID kode '.$id.' Tidak ditemukan");
    //                 window.location="'.base_url('konsul').'"
    //             </script>';
    //     }
    // }

    // public function update()
    // {
    //     $model = new Konsul_model;
    //     $id = $this->request->getPost('id_kode');
    //     $data = array(
    //         'kode_gejala' => $this->request->getPost('konsul'),
    //         'nama_gejala'         => $this->request->getPost('nama_gejala')
    //     );
    //     $model->editData($data,$id);
    //     echo '<script>
    //             alert("Sukses Edit Data Kode");
    //             window.location="'.base_url('konsul').'"
    //         </script>';

    // }

    // public function hapus($id)
    // {
    //     $model = new Konsul_model;
    //     $getData = $model->getData($id)->getRow();
    //     if(isset($getData))
    //     {
    //         $model->hapusData($id);
    //         echo '<script>
    //                 alert("Hapus Data Kode Sukses");
    //                 window.location="'.base_url('konsul').'"
    //             </script>';

    //     }else{

    //         echo '<script>
    //                 alert("Hapus Gagal !, ID barang '.$id.' Tidak ditemukan");
    //                 window.location="'.base_url('konsul').'"
    //             </script>';
    //     }
    // }
}