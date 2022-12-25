<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'isi'   => 'admin/login'
        ];
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function cek_login()
    {

        $loginValid = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
        ];

        if ($this->validate($loginValid)) {
            //jika valid

            $username = $this->request->getPost('username');
            $password = md5($this->request->getPost('password'));

            $cek_user = $this->ModelAuth->login_user($username, $password);
            if ($cek_user) {
                //jika data cocok
                session()->set('log', true);
                session()->set('username', $cek_user['username']);
                session()->set('nama', $cek_user['nama_user']);
                session()->set('role', $cek_user['role']);

                return redirect()->to(base_url('admin'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login gagal!!! Username atau password salah.');
                return redirect()->to(base_url('Auth/index'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/index'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('nama');
        session()->remove('role');

        session()->setFlashdata('success', 'Logout Berhasil !!!');
        return redirect()->to(base_url('Auth/index'));
    }
}
