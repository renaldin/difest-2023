<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;

class DesainMaskot extends BaseController
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
                'title'         => 'Desain Maskot',
                'cari'          => 'Aktif',
                'keyword'       => $keyword,
                'desainMaskot'  => $this->ModelDesainMaskot->cariData($keyword),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'           => 'admin/maskot/index'
            ];
        } else {
            $data = [
                'title'         => 'Desain Maskot',
                'cari'          => 'Tidak Aktif',
                'keyword'       => '',
                'desainMaskot'  => $this->ModelDesainMaskot->allData(),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'           => 'admin/maskot/index'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function detail($id_pendaftaran_maskot)
    {
        $data = [
            'title'             => 'Desain Maskot',
            'desainmaskot'      => $this->ModelDesainMaskot->detail($id_pendaftaran_maskot),
            'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
            'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
            'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
            'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
            'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
            'isi'               => 'admin/maskot/detail'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
