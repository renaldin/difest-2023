<?php

namespace App\Controllers;

use App\Models\ModelPendaftaran;
use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;

class Pendaftaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('download');
        $this->ModelPendaftaran     = new ModelPendaftaran();
        $this->ModelDesainMaskot    = new ModelDesainMaskot();
        $this->ModelDesainWeb       = new ModelDesainWeb();
        $this->ModelDesainPoster    = new ModelDesainPoster();
    }

    public function index()
    {
        $data = [
            'title' => 'Pendaftaran',
            'isi'   => 'pendaftaran/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    // ===================================================================
    // Desain Web
    public function inputDataWeb()
    {
        $data = [
            'title' => 'Pendaftaran Desain Web',
            'isi'   => 'pendaftaran/web/inputDataWeb'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataWeb()
    {
        $webValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[web.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama_tim' => [
                'label' => 'Nama Tim',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'instansi' => [
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            // amggota 1
            'nama_anggota1' => [
                'label' => 'Nama Anggota 1',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat_anggota1' => [
                'label' => 'Alamat Anggota 1',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa_anggota1' => [
                'label' => 'Nomor Whatsapp Anggota 1',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu_anggota1' => [
                'label' => 'Scan Kartu Pelajar Anggota 1',
                'rules' => 'uploaded[scan_kartu_anggota1]|max_size[scan_kartu_anggota1,1024]|mime_in[scan_kartu_anggota1,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            // amggota 2
            'nama_anggota2' => [
                'label' => 'Nama Anggota 2',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat_anggota2' => [
                'label' => 'Alamat Anggota 2',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa_anggota2' => [
                'label' => 'Nomor Whatsapp Anggota 2',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu_anggota2' => [
                'label' => 'Scan Kartu Pelajar Anggota 2',
                'rules' => 'uploaded[scan_kartu_anggota2]|max_size[scan_kartu_anggota2,1024]|mime_in[scan_kartu_anggota2,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
            'bukti_igdifest' => [
                'label' => 'Bukti Follow Instagram difest2021',
                'rules' => 'uploaded[bukti_igdifest]|max_size[bukti_igdifest,1024]|mime_in[bukti_igdifest,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ighimmi' => [
                'label' => 'Bukti Follow Instagram himmi.polsub',
                'rules' => 'uploaded[bukti_ighimmi]|max_size[bukti_ighimmi,1024]|mime_in[bukti_ighimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ythimmi' => [
                'label' => 'Bukti Subscribe Youtube Media Himmi',
                'rules' => 'uploaded[bukti_ythimmi]|max_size[bukti_ythimmi,1024]|mime_in[bukti_ythimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($webValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu_anggota1    = $this->request->getFile('scan_kartu_anggota1');
            $scan_kartu_anggota2    = $this->request->getFile('scan_kartu_anggota2');
            $bukti_igdifest         = $this->request->getFile('bukti_igdifest');
            $bukti_ighimmi          = $this->request->getFile('bukti_ighimmi');
            $bukti_ythimmi          = $this->request->getFile('bukti_ythimmi');
            $bukti_pembayaran       = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu_anggota1         = $scan_kartu_anggota1->getRandomName();
            $kartu_anggota2         = $scan_kartu_anggota2->getRandomName();
            $igdifest               = $bukti_igdifest->getRandomName();
            $ighimmi                = $bukti_ighimmi->getRandomName();
            $ythimmi                = $bukti_ythimmi->getRandomName();
            $pembayaran             = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'       => 'Desain Web',
                'email'             => $this->request->getPost('email'),
                'instansi'          => $this->request->getPost('instansi'),
                'nama_tim'          => $this->request->getPost('nama_tim'),
                // anggota1
                'nama_anggota1'         => $this->request->getPost('nama_anggota1'),
                'alamat_anggota1'       => $this->request->getPost('alamat_anggota1'),
                'wa_anggota1'           => $this->request->getPost('wa_anggota1'),
                'scan_kartu_anggota1'   => $kartu_anggota1,
                // anggota2
                'nama_anggota2'         => $this->request->getPost('nama_anggota2'),
                'alamat_anggota2'       => $this->request->getPost('alamat_anggota2'),
                'wa_anggota2'           => $this->request->getPost('wa_anggota2'),
                'scan_kartu_anggota2'   => $kartu_anggota2,
                // bukti
                'bukti_igdifest'        => $igdifest,
                'bukti_ighimmi'         => $ighimmi,
                'bukti_ythimmi'         => $ythimmi,
                'bukti_pembayaran'      => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu_anggota1->move('fotoweb', $kartu_anggota1);
            $scan_kartu_anggota2->move('fotoweb', $kartu_anggota2);
            $bukti_igdifest->move('fotoweb', $igdifest);
            $bukti_ighimmi->move('fotoweb', $ighimmi);
            $bukti_ythimmi->move('fotoweb', $ythimmi);
            $bukti_pembayaran->move('fotoweb', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranWeb($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Web. Silahkan Input Data Pembayaran!!!');

            $data_web = $this->ModelDesainWeb->detailByEmail($data['email']);

            return redirect()->to(base_url('pendaftaran/informasiWeb/' . $data_web['id_pendaftaran_web']));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function informasiWeb($id_pendaftaran_web)
    {
        $data = [
            'title' => 'Informasi Desain Web',
            'web'   => $this->ModelDesainWeb->detail($id_pendaftaran_web),
            'isi'   => 'pendaftaran/web/informasiWeb'
        ];
        return view('layout/v_wrapper', $data);
    }
    // ===================================================================

    // ===================================================================
    // Desain Maskot
    public function inputDataMaskot()
    {
        $data = [
            'title' => 'Pendaftaran Desain Maskot',
            'isi'   => 'pendaftaran/maskot/inputDataMaskot'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataMaskot()
    {
        $maskotValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[maskot.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama_peserta' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'instansi' => [
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa' => [
                'label' => 'Nomor Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu' => [
                'label' => 'Scan Kartu Pelajar',
                'rules' => 'uploaded[scan_kartu]|max_size[scan_kartu,1024]|mime_in[scan_kartu,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
            'bukti_igdifest' => [
                'label' => 'Bukti Follow Instagram difest2021',
                'rules' => 'uploaded[bukti_igdifest]|max_size[bukti_igdifest,1024]|mime_in[bukti_igdifest,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ighimmi' => [
                'label' => 'Bukti Follow Instagram himmi.polsub',
                'rules' => 'uploaded[bukti_ighimmi]|max_size[bukti_ighimmi,1024]|mime_in[bukti_ighimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ythimmi' => [
                'label' => 'Bukti Subscribe Youtube Media Himmi',
                'rules' => 'uploaded[bukti_ythimmi]|max_size[bukti_ythimmi,1024]|mime_in[bukti_ythimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($maskotValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu         = $this->request->getFile('scan_kartu');
            $bukti_igdifest     = $this->request->getFile('bukti_igdifest');
            $bukti_ighimmi      = $this->request->getFile('bukti_ighimmi');
            $bukti_ythimmi      = $this->request->getFile('bukti_ythimmi');
            $bukti_pembayaran   = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu          = $scan_kartu->getRandomName();
            $igdifest       = $bukti_igdifest->getRandomName();
            $ighimmi        = $bukti_ighimmi->getRandomName();
            $ythimmi        = $bukti_ythimmi->getRandomName();
            $pembayaran     = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'       => 'Desain Maskot',
                'email'             => $this->request->getPost('email'),
                'nama_peserta'      => $this->request->getPost('nama_peserta'),
                'alamat'            => $this->request->getPost('alamat'),
                'instansi'          => $this->request->getPost('instansi'),
                'wa'                => $this->request->getPost('wa'),
                'scan_kartu'        => $kartu,
                'bukti_igdifest'    => $igdifest,
                'bukti_ighimmi'     => $ighimmi,
                'bukti_ythimmi'     => $ythimmi,
                'bukti_pembayaran'  => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu->move('fotomaskot', $kartu);
            $bukti_igdifest->move('fotomaskot', $igdifest);
            $bukti_ighimmi->move('fotomaskot', $ighimmi);
            $bukti_ythimmi->move('fotomaskot', $ythimmi);
            $bukti_pembayaran->move('fotomaskot', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranMaskot($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Maskot. Silahkan Input Data Pembayaran!!!');

            $data_maskot = $this->ModelDesainMaskot->detailByEmail($data['email']);

            return redirect()->to(base_url('pendaftaran/informasiMaskot/' . $data_maskot['id_pendaftaran_maskot']));
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function informasiMaskot($id_pendaftaran_maskot)
    {
        $data = [
            'title'     => 'Informasi Desain Maskot',
            'maskot'    => $this->ModelDesainMaskot->detail($id_pendaftaran_maskot),
            'isi'       => 'pendaftaran/maskot/informasiMaskot'
        ];
        return view('layout/v_wrapper', $data);
    }
    // ===================================================================

    // ===================================================================
    // Desain Poster
    public function inputDataPoster()
    {
        $data = [
            'title' => 'Pendaftaran Desain Poster',
            'isi'   => 'pendaftaran/poster/inputDataPoster'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataPoster()
    {
        $posterValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[poster.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama_peserta' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'instansi' => [
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa' => [
                'label' => 'Nomor Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu' => [
                'label' => 'Scan Kartu Pelajar',
                'rules' => 'uploaded[scan_kartu]|max_size[scan_kartu,1024]|mime_in[scan_kartu,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
            'bukti_igdifest' => [
                'label' => 'Bukti Follow Instagram difest2021',
                'rules' => 'uploaded[bukti_igdifest]|max_size[bukti_igdifest,1024]|mime_in[bukti_igdifest,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ighimmi' => [
                'label' => 'Bukti Follow Instagram himmi.polsub',
                'rules' => 'uploaded[bukti_ighimmi]|max_size[bukti_ighimmi,1024]|mime_in[bukti_ighimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ythimmi' => [
                'label' => 'Bukti Subscribe Youtube Media Himmi',
                'rules' => 'uploaded[bukti_ythimmi]|max_size[bukti_ythimmi,1024]|mime_in[bukti_ythimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($posterValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu = $this->request->getFile('scan_kartu');
            $bukti_igdifest = $this->request->getFile('bukti_igdifest');
            $bukti_ighimmi = $this->request->getFile('bukti_ighimmi');
            $bukti_ythimmi = $this->request->getFile('bukti_ythimmi');
            $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu_anggota = $scan_kartu->getRandomName();
            $igdifest = $bukti_igdifest->getRandomName();
            $ighimmi = $bukti_ighimmi->getRandomName();
            $ythimmi = $bukti_ythimmi->getRandomName();
            $pembayaran = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'   => 'Desain Poster',
                'email'         => $this->request->getPost('email'),
                'nama_peserta'  => $this->request->getPost('nama_peserta'),
                'alamat'        => $this->request->getPost('alamat'),
                'instansi'      => $this->request->getPost('instansi'),
                'wa'            => $this->request->getPost('wa'),
                'scan_kartu'    => $kartu_anggota,
                // bukti
                'bukti_igdifest' => $igdifest,
                'bukti_ighimmi' => $ighimmi,
                'bukti_ythimmi' => $ythimmi,
                'bukti_pembayaran' => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu->move('fotoposter', $kartu_anggota);
            $bukti_igdifest->move('fotoposter', $igdifest);
            $bukti_ighimmi->move('fotoposter', $ighimmi);
            $bukti_ythimmi->move('fotoposter', $ythimmi);
            $bukti_pembayaran->move('fotoposter', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranPoster($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Poster. Silahkan Input Data Pembayaran');

            $data_poster = $this->ModelDesainPoster->detailByEmail($data['email']);

            return redirect()->to(base_url('pendaftaran/informasiPoster/' . $data_poster['id_pendaftaran_poster']));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function informasiPoster($id_pendaftaran_poster)
    {
        $data = [
            'title'     => 'Informasi Desain Poster',
            'poster'    => $this->ModelDesainPoster->detail($id_pendaftaran_poster),
            'isi'       => 'pendaftaran/poster/informasiPoster'
        ];
        return view('layout/v_wrapper', $data);
    }
    // ====================================================================

    public function inputDataPhotography()
    {
        $data = [
            'title' => 'Input Data Pendaftaran Photography',
            'isi'   => 'pendaftaran/inputDataPhotography'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataPhotography()
    {
        $photographyValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[pendaftaran_poster.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'instansi' => [
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa' => [
                'label' => 'Nomor Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'instagram' => [
                'label' => 'Instagram',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu' => [
                'label' => 'Scan Kartu Pelajar',
                'rules' => 'uploaded[scan_kartu]|max_size[scan_kartu,1024]|mime_in[scan_kartu,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
            'bukti_igdifest' => [
                'label' => 'Bukti Follow Instagram difest2021',
                'rules' => 'uploaded[bukti_igdifest]|max_size[bukti_igdifest,1024]|mime_in[bukti_igdifest,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ighimmi' => [
                'label' => 'Bukti Follow Instagram himmi.polsub',
                'rules' => 'uploaded[bukti_ighimmi]|max_size[bukti_ighimmi,1024]|mime_in[bukti_ighimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ythimmi' => [
                'label' => 'Bukti Subscribe Youtube Media Himmi',
                'rules' => 'uploaded[bukti_ythimmi]|max_size[bukti_ythimmi,1024]|mime_in[bukti_ythimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($photographyValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu = $this->request->getFile('scan_kartu');
            $bukti_igdifest = $this->request->getFile('bukti_igdifest');
            $bukti_ighimmi = $this->request->getFile('bukti_ighimmi');
            $bukti_ythimmi = $this->request->getFile('bukti_ythimmi');
            $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu_anggota = $scan_kartu->getRandomName();
            $igdifest = $bukti_igdifest->getRandomName();
            $ighimmi = $bukti_ighimmi->getRandomName();
            $ythimmi = $bukti_ythimmi->getRandomName();
            $pembayaran = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba' => $this->request->getPost('jenis_lomba'),
                'email' => $this->request->getPost('email'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'alamat' => $this->request->getPost('alamat'),
                'instansi' => $this->request->getPost('instansi'),
                'wa' => $this->request->getPost('wa'),
                'instagram' => $this->request->getPost('instagram'),
                'scan_kartu' => $kartu_anggota,
                // bukti
                'bukti_igdifest' => $igdifest,
                'bukti_ighimmi' => $ighimmi,
                'bukti_ythimmi' => $ythimmi,
                'bukti_pembayaran' => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu->move('fotophotography', $kartu_anggota);
            $bukti_igdifest->move('fotophotography', $igdifest);
            $bukti_ighimmi->move('fotophotography', $ighimmi);
            $bukti_ythimmi->move('fotophotography', $ythimmi);
            $bukti_pembayaran->move('fotophotography', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranPhotography($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Photography. Silahkan Input Data Pembayaran');

            return redirect()->to(base_url('pendaftaran/informasiPhotography'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('pendaftaran/inputDataPhotography'));
        }
    }

    public function inputDataShortmovie()
    {
        $data = [
            'title' => 'Input Data Pendaftaran Short Movie',
            'isi'   => 'pendaftaran/inputDataShortmovie'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataShortmovie()
    {
        $shortmovieValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[pendaftaran_shortmovie.email]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'instansi' => [
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa' => [
                'label' => 'Nomor Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'instagram' => [
                'label' => 'Instagram',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu' => [
                'label' => 'Scan Kartu Pelajar',
                'rules' => 'uploaded[scan_kartu]|max_size[scan_kartu,1024]|mime_in[scan_kartu,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
            'bukti_igdifest' => [
                'label' => 'Bukti Follow Instagram difest2021',
                'rules' => 'uploaded[bukti_igdifest]|max_size[bukti_igdifest,1024]|mime_in[bukti_igdifest,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ighimmi' => [
                'label' => 'Bukti Follow Instagram himmi.polsub',
                'rules' => 'uploaded[bukti_ighimmi]|max_size[bukti_ighimmi,1024]|mime_in[bukti_ighimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_ythimmi' => [
                'label' => 'Bukti Subscribe Youtube Media Himmi',
                'rules' => 'uploaded[bukti_ythimmi]|max_size[bukti_ythimmi,1024]|mime_in[bukti_ythimmi,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'bukti_pembayaran' => [
                'label' => 'Bukti Pembayaran',
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($shortmovieValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu = $this->request->getFile('scan_kartu');
            $bukti_igdifest = $this->request->getFile('bukti_igdifest');
            $bukti_ighimmi = $this->request->getFile('bukti_ighimmi');
            $bukti_ythimmi = $this->request->getFile('bukti_ythimmi');
            $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu_anggota = $scan_kartu->getRandomName();
            $igdifest = $bukti_igdifest->getRandomName();
            $ighimmi = $bukti_ighimmi->getRandomName();
            $ythimmi = $bukti_ythimmi->getRandomName();
            $pembayaran = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba' => $this->request->getPost('jenis_lomba'),
                'email' => $this->request->getPost('email'),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'alamat' => $this->request->getPost('alamat'),
                'instansi' => $this->request->getPost('instansi'),
                'wa' => $this->request->getPost('wa'),
                'instagram' => $this->request->getPost('instagram'),
                'scan_kartu' => $kartu_anggota,
                // bukti
                'bukti_igdifest' => $igdifest,
                'bukti_ighimmi' => $ighimmi,
                'bukti_ythimmi' => $ythimmi,
                'bukti_pembayaran' => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu->move('fotoshortmovie', $kartu_anggota);
            $bukti_igdifest->move('fotoshortmovie', $igdifest);
            $bukti_ighimmi->move('fotoshortmovie', $ighimmi);
            $bukti_ythimmi->move('fotoshortmovie', $ythimmi);
            $bukti_pembayaran->move('fotoshortmovie', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranshortmovie($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Shortmovie. Silahkan Input Data Pembayaran!!!');

            return redirect()->to(base_url('pendaftaran/informasiShortmovie'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('pendaftaran/inputDataShortmovie'));
        }
    }

    public function informasiPhotography()
    {
        $data = [
            'title' => 'Informasi Pendaftaran Photography',
            'isi'   => 'pendaftaran/informasiPhotography',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function informasiShortmovie()
    {
        $data = [
            'title' => 'Informasi Pendaftaran Short Movie',
            'isi'   => 'pendaftaran/informasiShortmovie',
        ];
        return view('layout/v_wrapper', $data);
    }

    public function downloadGuideDesainWeb()
    {
        $data = file_get_contents(base_url('pdf/Guidebook_Desain_Web.pdf'));
        $nama = 'Guidebook_Desain_Web.pdf';

        return $this->response->download($nama, $data);
    }

    public function downloadGuideDesainMaskot()
    {
        $data = file_get_contents(base_url('pdf/Guidebook_Desain_Maskot.pdf'));
        $nama = 'Guidebook_Desain_Maskot.pdf';

        return $this->response->download($nama, $data);
    }

    public function downloadGuideDesainPoster()
    {
        $data = file_get_contents(base_url('pdf/Guidebook_Desain_Poster.pdf'));
        $nama = 'Guidebook_Desain_Poster.pdf';

        return $this->response->download($nama, $data);
    }

    public function downloadGuidePhotography()
    {
        $data = file_get_contents(base_url('pdf/Guidebook_Fotografi.pdf'));
        $nama = 'Guidebook_Photography.pdf';

        return $this->response->download($nama, $data);
    }
}
