<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;

class DesainPoster extends BaseController
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
                'title'             => 'Desain Poster',
                'desainposter'      => $this->ModelDesainPoster->cariData($keyword),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'cari'              => 'Aktif',
                'keyword'           => $keyword,
                'isi'               => 'admin/poster/index'
            ];
        } else {
            $data = [
                'title'             => 'Desain Poster',
                'desainposter'      => $this->ModelDesainPoster->allData(),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
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
            'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
            'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
            'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
            'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
            'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
            'isi'               => 'admin/poster/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
