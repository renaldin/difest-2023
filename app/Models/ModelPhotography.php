<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPhotography extends Model
{

    public function allData()
    {
        return $this->db->table('pendaftaran_photography')
            ->orderBy('id_pendaftaran_photography', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_photography)
    {
        return $this->db->table('pendaftaran_photography')
            ->where('id_pendaftaran_photography', $id_pendaftaran_photography)
            ->get()->getRowArray();
    }
}
