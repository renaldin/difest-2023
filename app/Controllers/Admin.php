<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'isi'   => 'admin/admin'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }
}
