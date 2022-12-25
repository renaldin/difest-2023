<?php

namespace App\Controllers;

class Detail_lomba extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Desain Maskot',
            'isi'   => 'detail-lomba/maskot'
        ];
        return view('layout/v_wrapper', $data);
    }
    public function web()
    {
        $data = [
            'title' => 'Desain Web',
            'isi'   => 'detail-lomba/web'
        ];
        return view('layout/v_wrapper', $data);
    }
    public function poster()
    {
        $data = [
            'title' => 'Desain Poster',
            'isi'   => 'detail-lomba/poster'
        ];
        return view('layout/v_wrapper', $data);
    }
    public function photography()
    {
        $data = [
            'title' => 'Photography',
            'isi'   => 'detail-lomba/photography'
        ];
        return view('layout/v_wrapper', $data);
    }
    public function shortmovie()
    {
        $data = [
            'title' => 'Short Movie',
            'isi'   => 'detail-lomba/shortmovie'
        ];
        return view('layout/v_wrapper', $data);
    }
}
