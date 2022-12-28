<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->
<div class="row">
    <div class="col-lg-12">
        <div class="name-page">
            <h4>Daftar Desain Short Movie</h4>
        </div>
    </div>
</div>
<div class="page-content">
    <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
        <div class="alert bg-danger" role="alert" style="padding: 10px 30px 10px 30px; ">
            <ul>
                <?php foreach ($errors as $key => $value) { ?>
                    <li>
                        <?= esc($value); ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <form action="<?= base_url('pendaftaran/insertDataShortMovie') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Jenis Perlombaan</label>
                    <input type="text" class="form-control" name="jenis_lomba" value="Short Movie" disabled>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Email <small class="text-danger">* Pilih Salah Satu Email Anggota Tim</small><small class="text-danger"> (exp: example@gmail.com)</small></label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif" value="<?= old('email') ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Nama TIM <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_tim" placeholder="Masukkan Nama Tim" value="<?= old('nama_tim') ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Asal Instansi <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi" value="<?= old('instansi') ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Nomor Whatsapp<small class="text-danger">* isi nomor whatsapp salah satu anggota</small></label>
                    <input type="text" class="form-control" name="wa" placeholder="Masukkan Nomor Whatsapp" value="<?= old('wa') ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="form-daftar">
                    <label>*Catatan : Minimal 3 anggota dan maksimal 5 anggota. Untuk form anggota 4 dan anggota 5 opsional untuk diisi.</label>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <!-- anggota 1 -->
                <div class="form-daftar">
                    <label>Nama Anggota 1 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota1" placeholder="Masukkan Nama Anggota 1" value="<?= old('nama_anggota1') ?>">
                </div>
                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota1" placeholder="Masukkan Alamat" value="<?= old('alamat_anggota1') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="scan_kartu_anggota1" value="<?= old('scan_kartu_anggota1') ?>">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <!-- anggota 2 -->
                <div class="form-daftar">
                    <label>Nama Anggota 2 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota2" placeholder="Masukkan Nama Anggota 2" value="<?= old('nama_anggota2') ?>">
                </div>
                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota2" placeholder="Masukkan Alamat" value="<?= old('alamat_anggota2') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota2" value="<?= old('scan_kartu_anggota2') ?>">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <!-- anggota 3 -->
                <div class="form-daftar">
                    <label>Nama Anggota 3 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota3" placeholder="Masukkan Nama Anggota 3" value="<?= old('nama_anggota3') ?>">
                </div>
                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota3" placeholder="Masukkan Alamat" value="<?= old('alamat_anggota3') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="scan_kartu_anggota3" value="<?= old('scan_kartu_anggota3') ?>">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <!-- anggota 2 -->
                <div class="form-daftar">
                    <label>Nama Anggota 4</label>
                    <input type="text" class="form-control" name="nama_anggota4" placeholder="Masukkan Nama Anggota 4" value="<?= old('nama_anggota4') ?>">
                </div>
                <div class="form-daftar">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat_anggota4" placeholder="Masukkan Alamat" value="<?= old('alamat_anggota4') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar</label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota4" value="<?= old('scan_kartu_anggota4') ?>">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <!-- anggota 2 -->
                <div class="form-daftar">
                    <label>Nama Anggota 5</label>
                    <input type="text" class="form-control" name="nama_anggota5" placeholder="Masukkan Nama Anggota 5" value="<?= old('nama_anggota5') ?>">
                </div>
                <div class="form-daftar">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat_anggota5" placeholder="Masukkan Alamat" value="<?= old('alamat_anggota5') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar</label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota5" value="<?= old('scan_kartu_anggota5') ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="form-daftar">
                    <label>* Gambar Bukti</label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>difest2022</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_igdifest" value="<?= old('bukti_igdifest') ?>">
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>himmi.polsub</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_ighimmi" value="<?= old('bukti_ighimmi') ?>">
                </div>
            </div>
            <div class="cl-lg-12 col-sm-6">
                <div class="form-daftar">
                    <label>Bukti Subscribe Youtube <i>Media Himmi</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_ythimmi" value="<?= old('bukti_ythimmi') ?>">
                </div>
                <div class="form-daftar">
                    <label>Bukti Pembayaran <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_pembayaran" value="<?= old('bukti_pembayaran') ?>">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <p class="ms-4">Pembayaran:</p>
                <ul class="ms-4">
                    <li>BRI : 2132432769386278 a.n. Himmi Polsub</li>
                    <li>Shopee Pay : 0982653765287</li>
                    <li>Dana : 087867867667</li>
                </ul>
            </div>
            <div class="col-lg-6 text-end">
                <button type="submit" class="btn main-button ">
                    <a>Kirim</a>
                </button>
            </div>
        </div>
    </form>
</div>
<div class="col-md-3">

</div>
</div>