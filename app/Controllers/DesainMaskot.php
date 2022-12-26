<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;

class DesainMaskot extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainMaskot = new ModelDesainMaskot();
    }


    public function index()
    {
        if ($this->request->getPost('keyword')) {
            $keyword = $this->request->getPost('keyword');
            $data = [
                'title'         => 'Desain Maskot',
                'cari'          => 'Aktif',
                'desainMaskot'  => $this->ModelDesainMaskot->cariData($keyword),
                'isi'           => 'admin/maskot/index'
            ];
        } else {
            $data = [
                'title'         => 'Desain Maskot',
                'cari'          => 'Tidak Aktif',
                'desainMaskot'  => $this->ModelDesainMaskot->allData(),
                'isi'           => 'admin/maskot/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
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
