<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDesainMaskot extends Model
{

    public function allData()
    {
        return $this->db->table('maskot')
            ->orderBy('id_pendaftaran_maskot', 'DESC')
            ->get()->getResultArray();
    }

    public function cariData($keyword)
    {
        return $this->db->table('maskot')
            ->like('nama_peserta', $keyword)
            ->orLike('alamat', $keyword)
            ->orLike('instansi', $keyword)
            ->orderBy('id_pendaftaran_maskot', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran_maskot)
    {
        return $this->db->table('maskot')
            ->where('id_pendaftaran_maskot', $id_pendaftaran_maskot)
            ->get()->getRowArray();
    }

    public function detailByEmail($email)
    {
        return $this->db->table('maskot')
            ->where('email', $email)
            ->get()->getRowArray();
    }

    public function jumlahPendaftaran()
    {
        return $this->db->table('maskot')
            ->countAllResults();
    }
}
