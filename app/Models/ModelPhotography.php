<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPhotography extends Model
{

    public function allData()
    {
        return $this->db->table('photography')
            ->orderBy('id_pendaftaran_photography', 'DESC')
            ->get()->getResultArray();
    }

    public function cariData($keyword)
    {
        return $this->db->table('photography')
            ->like('nama_peserta', $keyword)
            ->orLike('alamat', $keyword)
            ->orLike('instansi', $keyword)
            ->orderBy('id_pendaftaran_photography', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_photography)
    {
        return $this->db->table('photography')
            ->where('id_pendaftaran_photography', $id_pendaftaran_photography)
            ->get()->getRowArray();
    }

    public function detailByEmail($email)
    {
        return $this->db->table('photography')
            ->where('email', $email)
            ->get()->getRowArray();
    }

    public function jumlahPendaftaran()
    {
        return $this->db->table('photography')
            ->countAllResults();
    }
}
