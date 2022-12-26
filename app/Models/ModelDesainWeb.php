<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDesainWeb extends Model
{

    public function allData()
    {
        return $this->db->table('pendaftaran_web')
            ->orderBy('id_pendaftaran_web', 'DESC')
            ->get()->getResultArray();
    }

    public function cariData($keyword)
    {
        return $this->db->table('pendaftaran_web')
            ->like('email', $keyword)
            ->orLike('instansi', $keyword)
            ->orLike('nama_tim', $keyword)
            ->orderBy('id_pendaftaran_web', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_web)
    {
        return $this->db->table('pendaftaran_web')
            ->where('id_pendaftaran_web', $id_pendaftaran_web)
            ->get()->getRowArray();
    }
}
