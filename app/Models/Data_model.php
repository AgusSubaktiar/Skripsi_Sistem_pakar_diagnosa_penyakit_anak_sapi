<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Data_model extends Model
{
    protected $table = 'basis_data';
     
    public function getData($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_basis' => $id]);
        }   
    }
    public function saveData($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editData($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_basis', $id);
        return $builder->update($data);
    }

    public function hapusData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_basis' => $id]);
    }
}