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
        $data = [
            'title'     => 'Desain Poster',
            'desain_poster'  => $this->ModelDesainPoster->allData(),
            'isi'       => 'admin/poster/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_poster)
    {
        $data = [
            'title'     => 'Desain Poster',
            'desain_poster'  => $this->ModelDesainPoster->detail($id_pendaftaran_poster),
            'isi'       => 'admin/poster/detail'
        ];
        return view('layout/v_wrapper', $data);
    }
}
