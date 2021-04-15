<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['user_name','password',];
    
    public function saveUser($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getUserModel($id = false){
        if($id === false){
            return $this->findAll();
        
        } else {
            return $this->where(['id_user' => $id])->first();
        }
    }

    public function editUser($data){
        $builder = $this->db->table($this->table);
        $builder->where('id_user', $data['id_user']);
        return $builder->update($data);    
    }
    
    public function deleteUser($id){
        $query = $this->db->table('users')->delete(array('id_user' => $id));
        return $query;
    }

    public function cekLogin($username, $password){
        $queryLogin = $this->db->table('users')
        ->where(array('user_name' => $username,'password' => $password))
        ->get()->getRowArray();
        return $queryLogin;
    }

}