<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;

class Photography extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelDesainMaskot        = new ModelDesainMaskot();
        $this->ModelDesainWeb           = new ModelDesainWeb();
        $this->ModelDesainPoster        = new ModelDesainPoster();
        $this->ModelPhotography         = new ModelPhotography();
        $this->ModelShortMovie          = new ModelShortMovie();
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
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'           => 'admin/photography/index'
            ];
        } else {
            $data = [
                'title'         => 'Photography',
                'cari'          => 'Tidak Aktif',
                'keyword'       => '',
                'photography'   => $this->ModelPhotography->allData(),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
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
            'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
            'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
            'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
            'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
            'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
            'isi'           => 'admin/photography/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
