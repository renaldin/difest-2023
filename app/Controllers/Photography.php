<?php

namespace App\Controllers;

use App\Models\ModelPhotography;

class Photography extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelPhotography = new ModelPhotography();
    }


    public function index()
    {
        $data = [
            'title'     => 'Photography',
            'photography'  => $this->ModelPhotography->allData(),
            'isi'       => 'admin/photography/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_photography)
    {
        $data = [
            'title'     => 'Photography',
            'photography'  => $this->ModelPhotography->detail($id_pendaftaran_photography),
            'isi'       => 'admin/photography/detail'
        ];
        return view('layout/v_wrapper', $data);
    }
}
