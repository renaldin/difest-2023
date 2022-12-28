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
        if ($this->request->getPost('keyword')) {
            $keyword = $this->request->getPost('keyword');
            $data = [
                'title'         => 'Photography',
                'cari'          => 'Aktif',
                'keyword'       => $keyword,
                'photography'   => $this->ModelPhotography->cariData($keyword),
                'isi'           => 'admin/photography/index'
            ];
        } else {
            $data = [
                'title'         => 'Photography',
                'cari'          => 'Tidak Aktif',
                'keyword'       => '',
                'photography'   => $this->ModelPhotography->allData(),
                'isi'           => 'admin/photography/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_photography)
    {
        $data = [
            'title'         => 'Photography',
            'photography'   => $this->ModelPhotography->detail($id_pendaftaran_photography),
            'isi'           => 'admin/photography/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
