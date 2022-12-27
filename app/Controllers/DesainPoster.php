<?php

namespace App\Controllers;

use App\Models\ModelDesainPoster;

class Desain_poster extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainPoster = new ModelDesainPoster();
    }


    public function index()
    {
        if ($this->request->getPost('keyword')) {
            $keyword = $this->request->getPost('keyword');
            $data = [
                'title'             => 'Desain Poster',
                'desainposter'      => $this->ModelDesainPoster->allData(),
                'cari'              => 'Aktif',
                'keyword'           => $keyword,
                'isi'               => 'admin/poster/index'
            ];
        } else {
            $data = [
                'title'             => 'Desain Poster',
                'desainposter'      => $this->ModelDesainPoster->allData(),
                'cari'              => 'Tidak Aktif',
                'keyword'           => '',
                'isi'               => 'admin/poster/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_poster)
    {
        $data = [
            'title'             => 'Desain Poster',
            'desainposter'      => $this->ModelDesainPoster->detail($id_pendaftaran_poster),
            'isi'               => 'admin/poster/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
