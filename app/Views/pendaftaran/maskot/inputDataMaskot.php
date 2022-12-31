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
        <div class="child-banner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <div class="name-page">
                            <h4>Daftar Maskot Design</h4>
                        </div>
                    </div>
                </div>
            </div>
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
    <form action="<?= base_url('pendaftaran/insertDataMaskot') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6 COL-SM-12">
                <div class="form-daftar">
                    <label>Jenis Perlombaan</label>
                    <input type="text" class="form-control" name="jenis_lomba" value="Desain Maskot" disabled>
                </div>

                <div class="form-daftar">
                    <label>Email <small class="text-danger">*</small><small class="text-danger"> (exp: example@gmail.com)</small></label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif Anda" value="<?= old('email') ?>">
                </div>

                <div class="form-daftar">
                    <label>Nama Lengkap <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_peserta" placeholder="Masukkan Nama Lengkap" value="<?= old('nama_peserta') ?>">
                </div>

                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= old('alamat') ?>">
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-daftar">
                    <label>Asal Sekolah <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Sekolah" value="<?= old('instansi') ?>">
                </div>
                <div class="form-daftar">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp: 0838345405878)</small></label>
                    <input type="text" class="form-control" name="wa" placeholder="Masukkan Nomor Whatsapp" value="<?= old('wa') ?>">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">* Maksimal ukuran file 1 mb</small></label>
                    <input type="file" class="form-control pt-3" name="scan_kartu" value="<?= old('scan_kartu') ?>">
                </div>
                <div class="form-daftar">
                    <label>Bukti Pembayaran <small class="text-danger">* Maksimal ukuran file 1 mb</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_pembayaran" value="<?= old('bukti_pembayaran') ?>">
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
                    <button type="submit" class="btn main-button">
                        <a>Kirim</a>
                    </button>
                </div>
            </div>

        </div>
    </form>

</div>




<!-- /.box-body -->