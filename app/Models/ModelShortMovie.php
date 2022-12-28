<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelShortMovie extends Model
{

    public function allData()
    {
        return $this->db->table('short_movie')
            ->orderBy('id_pendaftaran_movie', 'DESC')
            ->get()->getResultArray();
    }

    public function cariData($keyword)
    {
        return $this->db->table('short_movie')
            ->like('email', $keyword)
            ->orLike('instansi', $keyword)
            ->orLike('nama_tim', $keyword)
            ->orderBy('id_pendaftaran_movie', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_movie)
    {
        return $this->db->table('short_movie')
            ->where('id_pendaftaran_movie', $id_pendaftaran_movie)
            ->get()->getRowArray();
    }

    public function detailByEmail($email)
    {
        return $this->db->table('short_movie')
            ->where('email', $email)
            ->get()->getRowArray();
    }

    public function jumlahPendaftaran()
    {
        return $this->db->table('short_movie')
            ->countAllResults();
    }
}
