<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{

    public function allData()
    {
        return $this->db->table('user')
            ->orderBy('id_user', 'DESC')
            ->get()->getResultArray();
    }

    public function cariData($keyword)
    {
        return $this->db->table('user')
            ->like('nama_user', $keyword)
            ->orLike('username', $keyword)
            ->orLike('role', $keyword)
            ->orderBy('id_user', 'DESC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('user')->where('id_user', $data['id_user'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('user')->where('id_user', $data['id_user'])->delete($data);
    }
}
