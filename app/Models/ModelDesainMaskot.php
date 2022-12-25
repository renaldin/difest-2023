<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDesainMaskot extends Model
{

    public function allData()
    {
        return $this->db->table('pendaftaran_maskot')
            ->orderBy('id_pendaftaran_maskot', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_maskot)
    {
        return $this->db->table('pendaftaran_maskot')
            ->where('id_pendaftaran_maskot', $id_pendaftaran_maskot)
            ->get()->getRowArray();
    }
}
