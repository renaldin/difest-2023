<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{

    public function allData()
    {
        return $this->db->table('pendaftaran_web')
            ->orderBy('id_pendaftaran_web', 'DESC')
            ->get()->getResultArray();
    }

    public function addBuktiPembayaran($data)
    {
        $this->db->table('bukti_pembayaran')->insert($data);
    }

    public function addPendaftaranWeb($data)
    {
        $this->db->table('web')->insert($data);
    }

    public function addPendaftaranMaskot($data)
    {
        $this->db->table('maskot')->insert($data);
    }

    public function addPendaftaranPoster($data)
    {
        $this->db->table('poster')->insert($data);
    }

    public function addPendaftaranPhotography($data)
    {
        $this->db->table('pendaftaran_photography')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('pendaftaran_web')->where('id_pendaftaran_web', $data['id_pendaftaran_web'])->delete($data);
    }
}
