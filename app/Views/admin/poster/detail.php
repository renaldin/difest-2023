<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Data Peserta</h2>
                <form class="tm-signup-form row">
                    <div class="form-group col-lg-6">
                        <label for="jenis_lomba">Jenis Lomba</label>
                        <input id="jenis_lomba" name="jenis_lomba" type="text" class="form-control validate text-dark" value="<?= $desainposter['jenis_lomba'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_peserta">Nama Peserta</label>
                        <input id="nama_peserta" name="nama_peserta" type="text" class="form-control validate text-dark" value="<?= $desainposter['nama_peserta'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control validate text-dark" value="<?= $desainposter['email'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" name="alamat" type="text" class="form-control validate text-dark" value="<?= $desainposter['alamat'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="instansi">Instansi</label>
                        <input id="instansi" name="instansi" type="text" class="form-control validate text-dark" value="<?= $desainposter['instansi'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="wa">Nomor Whatsapp</label>
                        <input id="wa" name="wa" type="text" class="form-control validate text-dark" value="<?= $desainposter['wa'] ?>" disabled />
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="tm-hide-sm">&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#scan_kartu">
                            Kartu Tanda Siswa
                        </button>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="tm-hide-sm">&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#bukti_igdifest">
                            Follow Instagram Difest 2023
                        </button>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="tm-hide-sm">&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#bukti_ighimmi">
                            Follow Instagram HIMMI
                        </button>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="tm-hide-sm">&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#bukti_ythimmi">
                            Subscribe YouTube
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                <h2 class="tm-block-title">Bukti Pembayaran</h2>
                <div class="tm-avatar-container">
                    <img src="<?= base_url('fotoposter/' . $desainposter['bukti_pembayaran']) ?>" alt="Bukti Pembayaran" class="tm-avatar img-fluid mb-4" />
                </div>
                <button class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#buktiPembayaran">
                    Lihat
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
                            <img src="<?= base_url('fotoposter/' . $desainposter['bukti_pembayaran']) ?>" alt="Bukti Pembayaran">
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

<div class="modal fade" id="scan_kartu">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Bukti Kartu Tanda Siswa</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="<?= base_url('fotoposter/' . $desainposter['scan_kartu']) ?>" alt="Kartu Tanda Siswa">
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
                            <img src="<?= base_url('fotoposter/' . $desainposter['bukti_igdifest']) ?>" alt="Follow IG Difest 2023">
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
                            <img src="<?= base_url('fotoposter/' . $desainposter['bukti_ighimmi']) ?>" alt="Follow IG HIMMI POLSUB">
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
                            <img src="<?= base_url('fotoposter/' . $desainposter['bukti_ythimmi']) ?>" alt="Subscribe YouTube Himmi">
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