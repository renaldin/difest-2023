<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;

class ShortMovie extends BaseController
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
                'title'             => 'Short Movie',
                'cari'              => 'Aktif',
                'keyword'           => $keyword,
                'shortmovie'        => $this->ModelShortMovie->cariData($keyword),
                'jumlahmaskot'      => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'         => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'      => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography' => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'  => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'               => 'admin/short_movie/index'
            ];
        } else {
            $data = [
                'title'             => 'Short Movie',
                'cari'              => 'Tidak Aktif',
                'keyword'           => '',
                'shortmovie'        => $this->ModelShortMovie->allData(),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'               => 'admin/short_movie/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_movie)
    {
        $data = [
            'title'             => 'Short Movie',
            'shortmovie'        => $this->ModelShortMovie->detail($id_pendaftaran_movie),
            'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
            'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
            'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
            'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
            'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
            'isi'               => 'admin/short_movie/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
