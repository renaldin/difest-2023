<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDesainPoster extends Model
{

    public function allData()
    {
        return $this->db->table('poster')
            ->orderBy('id_pendaftaran_poster', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_poster)
    {
        return $this->db->table('poster')
            ->where('id_pendaftaran_poster', $id_pendaftaran_poster)
            ->get()->getRowArray();
    }

    public function detailByEmail($email)
    {
        return $this->db->table('poster')
            ->where('email', $email)
            ->get()->getRowArray();
    }
}
