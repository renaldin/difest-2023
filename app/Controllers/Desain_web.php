<?php

namespace App\Controllers;

use App\Models\ModelDesainWeb;

class Desain_web extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainWeb = new ModelDesainWeb();
    }


    public function index()
    {
        $data = [
            'title'     => 'Desain Web',
            'desain_web'  => $this->ModelDesainWeb->allData(),
            'isi'       => 'admin/web/index'
        ];
        return view('layout/v_wrapper', $data);
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
