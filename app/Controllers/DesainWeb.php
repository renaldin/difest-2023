<?php

namespace App\Controllers;

use App\Models\ModelDesainWeb;

class DesainWeb extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainWeb = new ModelDesainWeb();
    }


    public function index()
    {
        if ($this->request->getPost('keyword')) {
            $keyword = $this->request->getPost('keyword');
            $data = [
                'title'         => 'Desain Web',
                'cari'          => 'Aktif',
                'desainWeb'    => $this->ModelDesainWeb->cariData($keyword),
                'isi'           => 'admin/web/index'
            ];
        } else {
            $data = [
                'title'         => 'Desain Web',
                'cari'          => 'Tidak Aktif',
                'desainWeb'    => $this->ModelDesainWeb->allData(),
                'isi'           => 'admin/web/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_web)
    {
        $data = [
            'title'     => 'Desain Web',
            'desain_web'  => $this->ModelDesainWeb->detail($id_pendaftaran_web),
            'isi'       => 'admin/web/detail'
        ];
        return view('layout/v_wrapper', $data);
    }
}
