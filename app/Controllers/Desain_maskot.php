<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;

class Desain_maskot extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainMaskot = new ModelDesainMaskot();
    }


    public function index()
    {
        $data = [
            'title'     => 'Desain Maskot',
            'desain_maskot'  => $this->ModelDesainMaskot->allData(),
            'isi'       => 'admin/maskot/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_maskot)
    {
        $data = [
            'title'     => 'Desain Maskot',
            'desain_maskot'  => $this->ModelDesainMaskot->detail($id_pendaftaran_maskot),
            'isi'       => 'admin/maskot/detail'
        ];
        return view('layout/v_wrapper', $data);
    }
   
}
