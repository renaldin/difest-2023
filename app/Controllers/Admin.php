<?php

namespace App\Controllers;

use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;
use App\Models\ModelLog;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelDesainMaskot        = new ModelDesainMaskot();
        $this->ModelDesainWeb           = new ModelDesainWeb();
        $this->ModelDesainPoster        = new ModelDesainPoster();
        $this->ModelPhotography         = new ModelPhotography();
        $this->ModelShortMovie          = new ModelShortMovie();
        $this->ModelLog                 = new ModelLog();
    }

    public function index()
    {
        $data = [
            'title'         => 'Admin',
            'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
            'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
            'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
            'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
            'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
            'log'                 => $this->ModelLog->allData(),
            'isi'           => 'admin/admin'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
