<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;


class User extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelUser = new ModelUser();
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
                'title'     => 'Pengguna',
                'cari'      => 'Aktif',
                'user'      => $this->ModelUser->cariData($keyword),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'       => 'admin/user'
            ];
        } else {
            $data = [
                'title'     => 'Pengguna',
                'cari'      => 'Tidak Aktif',
                'user'      => $this->ModelUser->allData(),
                'jumlahmaskot'        => $this->ModelDesainMaskot->jumlahPendaftaran(),
                'jumlahweb'           => $this->ModelDesainWeb->jumlahPendaftaran(),
                'jumlahposter'        => $this->ModelDesainPoster->jumlahPendaftaran(),
                'jumlahphotography'   => $this->ModelPhotography->jumlahPendaftaran(),
                'jumlahshortmovie'    => $this->ModelShortMovie->jumlahPendaftaran(),
                'isi'       => 'admin/user'
            ];
        }
        return view('layoutAdmin/v_wrapper', $data);
    }

    public function add()
    {
        $userValid = [
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($userValid)) {

            $data = [
                'nama_user'     => $this->request->getPost('nama_user'),
                'username'      => $this->request->getPost('username'),
                'password'      => md5($this->request->getPost('password')),
                'role'          => $this->request->getPost('role'),
            ];

            $this->ModelUser->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');
            return redirect()->to(base_url('user'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('user'));
        }
    }

    public function edit($id_user)
    {
        $userValid = [
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'role' => [
                'label' => 'Role',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($userValid)) {

            if ($this->request->getPost('password')) {
                $data = [
                    'id_user'   => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username'  => $this->request->getPost('username'),
                    'password'  => md5($this->request->getPost('password')),
                    'role'      => $this->request->getPost('role'),
                ];
            } else {
                $data = [
                    'id_user'   => $id_user,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username'  => $this->request->getPost('username'),
                    'role'      => $this->request->getPost('role'),
                ];
            }

            $this->ModelUser->edit($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diedit!!!');
            return redirect()->to(base_url('user'));
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('user'));
        }
    }

    public function delete($id_user)
    {
        $data = [
            'id_user'   => $id_user,
        ];

        $this->ModelUser->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');
        return redirect()->to(base_url('user'));
    }
}
