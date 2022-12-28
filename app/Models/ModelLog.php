<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLog extends Model
{

    public function allData()
    {
        return $this->db->table('log')
            ->orderBy('id_log', 'DESC')
            ->limit(9)
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('log')->insert($data);
    }
}
