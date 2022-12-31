<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Data Peserta <?= $shortmovie['jenis_lomba'] ?></h2>
                <h2 class="tm-block-title">Tanggal Daftar : <?= $shortmovie['tanggal'] ?></h2>
                <form class="tm-signup-form row">
                    <div class="form-group col-lg-6">
                        <label for="nama_tim">Nama Tim</label>
                        <input id="nama_tim" name="nama_tim" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_tim'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control validate text-dark" value="<?= $shortmovie['email'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="instansi">Instansi</label>
                        <input id="instansi" name="instansi" type="text" class="form-control validate text-dark" value="<?= $shortmovie['instansi'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="wa">Nomor Whatsapp</label>
                        <input id="wa" name="wa" type="text" class="form-control validate text-dark" value="<?= $shortmovie['wa'] ?>" disabled />
                    </div>
                    <div class="col-lg-12">
                        <div class="row tm-signup-form">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_anggota1">Nama Anggota 1</label>
                                    <input id="nama_anggota1" name="nama_anggota1" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_anggota1'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="alamat_anggota1">Alamat</label>
                                    <input id="alamat_anggota1" name="alamat_anggota1" type="text" class="form-control validate text-dark" value="<?= $shortmovie['alamat_anggota1'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="tm-hide-sm">&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu_anggota1">
                                        Kartu Tanda Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_anggota1">Nama Anggota 2</label>
                                    <input id="nama_anggota2" name="nama_anggota2" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_anggota2'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="alamat_anggota2">Alamat</label>
                                    <input id="alamat_anggota2" name="alamat_anggota2" type="text" class="form-control validate text-dark" value="<?= $shortmovie['alamat_anggota2'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="tm-hide-sm">&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu_anggota2">
                                        Kartu Tanda Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_anggota3">Nama Anggota 3</label>
                                    <input id="nama_anggota3" name="nama_anggota3" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_anggota3'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="alamat_anggota3">Alamat</label>
                                    <input id="alamat_anggota3" name="alamat_anggota3" type="text" class="form-control validate text-dark" value="<?= $shortmovie['alamat_anggota3'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="tm-hide-sm">&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu_anggota3">
                                        Kartu Tanda Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_anggota4">Nama Anggota 4</label>
                                    <input id="nama_anggota4" name="nama_anggota4" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_anggota4'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="alamat_anggota4">Alamat</label>
                                    <input id="alamat_anggota4" name="alamat_anggota4" type="text" class="form-control validate text-dark" value="<?= $shortmovie['alamat_anggota4'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="tm-hide-sm">&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu_anggota4">
                                        Kartu Tanda Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_anggota5">Nama Anggota 5</label>
                                    <input id="nama_anggota5" name="nama_anggota5" type="text" class="form-control validate text-dark" value="<?= $shortmovie['nama_anggota5'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="alamat_anggota5">Alamat</label>
                                    <input id="alamat_anggota5" name="alamat_anggota5" type="text" class="form-control validate text-dark" value="<?= $shortmovie['alamat_anggota5'] ?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label class="tm-hide-sm">&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu_anggota5">
                                        Kartu Tanda Siswa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                <h2 class="tm-block-title">Gambar Bukti</h2>
                <div class="tm-avatar-container">
                    <img src="<?= base_url('fotoshortmovie/' . $shortmovie['bukti_pembayaran']) ?>" alt="Bukti Pembayaran" class="tm-avatar img-fluid mb-4" />
                </div>
                <button class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#buktiPembayaran">
                    Bukti Pembayaran
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buktiPembayaran">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Pembayaran</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['bukti_pembayaran']) ?>" alt="Bukti Pembayaran" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scan_kartu_anggota1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa Anggota 1</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['scan_kartu_anggota1']) ?>" alt="Kartu Tanda Siswa" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scan_kartu_anggota2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa Anggota 2</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['scan_kartu_anggota2']) ?>" alt="Kartu Tanda Siswa" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scan_kartu_anggota3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa Anggota 3</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['scan_kartu_anggota3']) ?>" alt="Kartu Tanda Siswa" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scan_kartu_anggota4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa Anggota 4</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($shortmovie['scan_kartu_anggota4']) { ?>
                            <center>
                                <img src="<?= base_url('fotoshortmovie/' . $shortmovie['scan_kartu_anggota4']) ?>" alt="Kartu Tanda Siswa" width="100%">
                            </center>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scan_kartu_anggota5">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa Anggota 5</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php if ($shortmovie['scan_kartu_anggota5']) { ?>
                            <center>
                                <img src="<?= base_url('fotoshortmovie/' . $shortmovie['scan_kartu_anggota5']) ?>" alt="Kartu Tanda Siswa" width="100%">
                            </center>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bukti_igdifest">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Follow IG Difest 2023</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['bukti_igdifest']) ?>" alt="Follow IG Difest 2023" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bukti_ighimmi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Follow IG HIMMI POLSUB</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['bukti_ighimmi']) ?>" alt="Follow IG HIMMI POLSUB" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bukti_ythimmi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Subscribe YouTube Himmi</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoshortmovie/' . $shortmovie['bukti_ythimmi']) ?>" alt="Subscribe YouTube Himmi" width="100%">
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>