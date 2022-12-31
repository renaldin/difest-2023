<?php

namespace App\Controllers;

use App\Models\ModelPendaftaran;
use App\Models\ModelDesainMaskot;
use App\Models\ModelDesainWeb;
use App\Models\ModelDesainPoster;
use App\Models\ModelPhotography;
use App\Models\ModelShortMovie;
use App\Models\ModelLog;

class Pendaftaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('download');
        $this->ModelPendaftaran         = new ModelPendaftaran();
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
                'label' => 'Sekolah',
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
            $scan_kartu_anggota1    = $this->request->getFile('scan_kartu_anggota1');
            $scan_kartu_anggota2    = $this->request->getFile('scan_kartu_anggota2');
            $bukti_pembayaran       = $this->request->getFile('bukti_pembayaran');

            $kartu_anggota1         = $scan_kartu_anggota1->getRandomName();
            $kartu_anggota2         = $scan_kartu_anggota2->getRandomName();
            $pembayaran             = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'       => 'Desain Web',
                'email'             => $this->request->getPost('email'),
                'instansi'          => $this->request->getPost('instansi'),
                'nama_tim'          => $this->request->getPost('nama_tim'),

                'nama_anggota1'         => $this->request->getPost('nama_anggota1'),
                'alamat_anggota1'       => $this->request->getPost('alamat_anggota1'),
                'wa_anggota1'           => $this->request->getPost('wa_anggota1'),
                'scan_kartu_anggota1'   => $kartu_anggota1,

                'nama_anggota2'         => $this->request->getPost('nama_anggota2'),
                'alamat_anggota2'       => $this->request->getPost('alamat_anggota2'),
                'wa_anggota2'           => $this->request->getPost('wa_anggota2'),
                'scan_kartu_anggota2'   => $kartu_anggota2,

                'bukti_pembayaran'      => $pembayaran,
            ];

            $scan_kartu_anggota1->move('fotoweb', $kartu_anggota1);
            $scan_kartu_anggota2->move('fotoweb', $kartu_anggota2);
            $bukti_pembayaran->move('fotoweb', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranWeb($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Web. Silahkan Input Data Pembayaran!!!');

            $data_web = $this->ModelDesainWeb->detailByEmail($data['email']);

            $data_log = [
                'nama'  => $data_web['nama_tim'],
                'jenis_lomba'   => $data_web['jenis_lomba']
            ];
            $this->ModelLog->add($data_log);

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
                'label' => 'Sekolah',
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

            $scan_kartu         = $this->request->getFile('scan_kartu');
            $bukti_pembayaran   = $this->request->getFile('bukti_pembayaran');

            $kartu          = $scan_kartu->getRandomName();
            $pembayaran     = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'       => 'Desain Maskot',
                'email'             => $this->request->getPost('email'),
                'nama_peserta'      => $this->request->getPost('nama_peserta'),
                'alamat'            => $this->request->getPost('alamat'),
                'instansi'          => $this->request->getPost('instansi'),
                'wa'                => $this->request->getPost('wa'),
                'scan_kartu'        => $kartu,
                'bukti_pembayaran'  => $pembayaran,
            ];

            $scan_kartu->move('fotomaskot', $kartu);
            $bukti_pembayaran->move('fotomaskot', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranMaskot($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Maskot. Silahkan Input Data Pembayaran!!!');

            $data_maskot = $this->ModelDesainMaskot->detailByEmail($data['email']);

            $data_log = [
                'nama'  => $data_maskot['nama_peserta'],
                'jenis_lomba'   => $data_maskot['jenis_lomba']
            ];
            $this->ModelLog->add($data_log);

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
                'label' => 'Sekolah',
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

            $scan_kartu = $this->request->getFile('scan_kartu');
            $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');

            $kartu_anggota = $scan_kartu->getRandomName();
            $pembayaran = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'   => 'Desain Poster',
                'email'         => $this->request->getPost('email'),
                'nama_peserta'  => $this->request->getPost('nama_peserta'),
                'alamat'        => $this->request->getPost('alamat'),
                'instansi'      => $this->request->getPost('instansi'),
                'wa'            => $this->request->getPost('wa'),
                'scan_kartu'    => $kartu_anggota,

                'bukti_pembayaran' => $pembayaran,
            ];

            $scan_kartu->move('fotoposter', $kartu_anggota);
            $bukti_pembayaran->move('fotoposter', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranPoster($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Desain Poster. Silahkan Input Data Pembayaran');

            $data_poster = $this->ModelDesainPoster->detailByEmail($data['email']);

            $data_log = [
                'nama'  => $data_poster['nama_peserta'],
                'jenis_lomba'   => $data_poster['jenis_lomba']
            ];
            $this->ModelLog->add($data_log);

            return redirect()->to(base_url('pendaftaran/informasiPoster/' . $data_poster['id_pendaftaran_poster']));
        } else {
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

    // ====================================================================
    // Photography
    public function inputDataPhotography()
    {
        $data = [
            'title' => 'Pendaftaran Photography',
            'isi'   => 'pendaftaran/photography/inputDataPhotography'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataPhotography()
    {
        $photographyValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[photography.email]',
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
                'label' => 'Sekolah',
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

            $scan_kartu = $this->request->getFile('scan_kartu');
            $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');

            $kartu_anggota = $scan_kartu->getRandomName();
            $pembayaran = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba' => 'Photography',
                'email' => $this->request->getPost('email'),
                'nama_peserta' => $this->request->getPost('nama_peserta'),
                'alamat' => $this->request->getPost('alamat'),
                'instansi' => $this->request->getPost('instansi'),
                'wa' => $this->request->getPost('wa'),
                'scan_kartu' => $kartu_anggota,
                'bukti_pembayaran' => $pembayaran,
            ];

            $scan_kartu->move('fotophotography', $kartu_anggota);
            $bukti_pembayaran->move('fotophotography', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranPhotography($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Photography. Silahkan Input Data Pembayaran');

            $data_photography = $this->ModelPhotography->detailByEmail($data['email']);

            $data_log = [
                'nama'  => $data_photography['nama_peserta'],
                'jenis_lomba'   => $data_photography['jenis_lomba']
            ];
            $this->ModelLog->add($data_log);

            return redirect()->to(base_url('pendaftaran/informasiPhotography/' . $data_photography['id_pendaftaran_photography']));
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function informasiPhotography($id_pendaftaran_photography)
    {
        $data = [
            'title'         => 'Informasi Photography',
            'photography'   => $this->ModelPhotography->detail($id_pendaftaran_photography),
            'isi'           => 'pendaftaran/photography/informasiPhotography',
        ];
        return view('layout/v_wrapper', $data);
    }
    // ====================================================================

    // ====================================================================
    // Short Movie
    public function inputDataShortMovie()
    {
        $data = [
            'title' => 'Pendaftaran Short Movie',
            'isi'   => 'pendaftaran/short_movie/inputDataShortmovie'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insertDataShortMovie()
    {
        $shortMovieValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[short_movie.email]',
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
                'label' => 'Sekolah',
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
            'scan_kartu_anggota1' => [
                'label' => 'Scan Kartu Pelajar/Mahasiswa Anggota 1',
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
            'scan_kartu_anggota2' => [
                'label' => 'Scan Kartu Pelajar/Mahasiswa Anggota 2',
                'rules' => 'uploaded[scan_kartu_anggota2]|max_size[scan_kartu_anggota2,1024]|mime_in[scan_kartu_anggota2,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            // amggota 3
            'nama_anggota3' => [
                'label' => 'Nama Anggota 3',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat_anggota3' => [
                'label' => 'Alamat Anggota 3',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'scan_kartu_anggota3' => [
                'label' => 'Scan Kartu Pelajar/Mahasiswa Anggota 3',
                'rules' => 'uploaded[scan_kartu_anggota3]|max_size[scan_kartu_anggota3,1024]|mime_in[scan_kartu_anggota3,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            // anggota 4
            'scan_kartu_anggota4' => [
                'label' => 'Scan Kartu Pelajar/Mahasiswa Anggota 4',
                'rules' => 'max_size[scan_kartu_anggota4,1024]|mime_in[scan_kartu_anggota4,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            // anggota 5
            'scan_kartu_anggota5' => [
                'label' => 'Scan Kartu Pelajar/Mahasiswa Anggota 5',
                'rules' => 'max_size[scan_kartu_anggota5,1024]|mime_in[scan_kartu_anggota5,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],

            // bukti
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

        if ($this->validate($shortMovieValid)) {
            //jika valid
            //mengambil data foto di form
            $scan_kartu_anggota1    = $this->request->getFile('scan_kartu_anggota1');
            $scan_kartu_anggota2    = $this->request->getFile('scan_kartu_anggota2');
            $scan_kartu_anggota3    = $this->request->getFile('scan_kartu_anggota3');
            $scan_kartu_anggota4    = $this->request->getFile('scan_kartu_anggota4');
            $scan_kartu_anggota5    = $this->request->getFile('scan_kartu_anggota5');
            $bukti_pembayaran       = $this->request->getFile('bukti_pembayaran');
            //mengganti nama 
            $kartu_anggota1         = $scan_kartu_anggota1->getRandomName();
            $kartu_anggota2         = $scan_kartu_anggota2->getRandomName();
            $kartu_anggota3         = $scan_kartu_anggota3->getRandomName();
            $kartu_anggota4         = $scan_kartu_anggota4->getRandomName();
            $kartu_anggota5         = $scan_kartu_anggota5->getRandomName();
            $pembayaran             = $bukti_pembayaran->getRandomName();

            $data = [
                'jenis_lomba'       => 'Short Movie',
                'email'             => $this->request->getPost('email'),
                'instansi'          => $this->request->getPost('instansi'),
                'nama_tim'          => $this->request->getPost('nama_tim'),
                'wa'                => $this->request->getPost('wa'),
                // anggota1
                'nama_anggota1'         => $this->request->getPost('nama_anggota1'),
                'alamat_anggota1'       => $this->request->getPost('alamat_anggota1'),
                'scan_kartu_anggota1'   => $kartu_anggota1,
                // anggota2
                'nama_anggota2'         => $this->request->getPost('nama_anggota2'),
                'alamat_anggota2'       => $this->request->getPost('alamat_anggota2'),
                'scan_kartu_anggota2'   => $kartu_anggota2,
                // anggota3
                'nama_anggota3'         => $this->request->getPost('nama_anggota3'),
                'alamat_anggota3'       => $this->request->getPost('alamat_anggota3'),
                'scan_kartu_anggota3'   => $kartu_anggota3,
                // anggota4
                'nama_anggota4'         => $this->request->getPost('nama_anggota4'),
                'alamat_anggota4'       => $this->request->getPost('alamat_anggota4'),
                'scan_kartu_anggota4'   => $kartu_anggota4,
                // anggota5
                'nama_anggota5'         => $this->request->getPost('nama_anggota5'),
                'alamat_anggota5'       => $this->request->getPost('alamat_anggota5'),
                'scan_kartu_anggota5'   => $kartu_anggota5,
                // bukti
                'bukti_pembayaran'      => $pembayaran,
            ];
            // memindahkan lokasi foto
            $scan_kartu_anggota1->move('fotoshortmovie', $kartu_anggota1);
            $scan_kartu_anggota2->move('fotoshortmovie', $kartu_anggota2);
            $scan_kartu_anggota3->move('fotoshortmovie', $kartu_anggota3);
            $scan_kartu_anggota4->move('fotoshortmovie', $kartu_anggota4);
            $scan_kartu_anggota5->move('fotoshortmovie', $kartu_anggota5);
            $bukti_pembayaran->move('fotoshortmovie', $pembayaran);

            $this->ModelPendaftaran->addPendaftaranShortMovie($data);
            session()->setFlashdata('pesan', 'Anda Berhasil Daftar Jenis Perlombaan Short Movie. Silahkan Input Data Pembayaran!!!');

            $data_short_movie = $this->ModelShortMovie->detailByEmail($data['email']);

            $data_log = [
                'nama'  => $data_short_movie['nama_tim'],
                'jenis_lomba'   => $data_short_movie['jenis_lomba']
            ];
            $this->ModelLog->add($data_log);

            return redirect()->to(base_url('pendaftaran/informasiShortMovie/' . $data_short_movie['id_pendaftaran_movie']));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function informasiShortMovie($id_pendaftaran_movie)
    {
        $data = [
            'title'         => 'Pendaftaran Short Movie',
            'shortmovie'    => $this->ModelShortMovie->detail($id_pendaftaran_movie),
            'isi'           => 'pendaftaran/short_movie/informasiShortmovie',
        ];
        return view('layout/v_wrapper', $data);
    }
    // ====================================================================

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
