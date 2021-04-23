<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Login extends Controller{

    public function index(){
        helper(['form']);
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pages/login',$data);
    }

    public function auth()
    {
        if (!$this->validate([
            'user_name' => 'required',
            'password' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/pages')->withInput()->with('validation',$validation);
            # code...
        }
        $userModel = new UsersModel;
        $username = $this->request->getPost('user_name');
        $password = md5($this->request->getPost('password'));

        $cekLogin = $userModel->cekLogin($username, $password);
        if ($cekLogin == 0) {
            session()->setFlashData('alertPassword','Username atau password yang kamu masukkan salah. Silakan coba lagi.');
            return redirect()->to('/Login');
        
        }else {
            if ($cekLogin['role'] == 1) {
                return redirect()->to('/pages');
                session()->set('loginData','1');
            }else{
            session()->set('id_user', $cekLogin['id_user']);
            session()->set('user_name', $cekLogin['user_name']);
             return redirect()->to('/home');
            }
            // return redirect()->to('/Login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}