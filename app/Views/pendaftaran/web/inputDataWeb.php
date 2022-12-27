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
            <h4>Daftar Desain WEB</h4>
        </div>
    </div>
</div>
<div class="page-content">
    <div data-aos="zoom-in-down">

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
        <form action="<?= base_url('pendaftaran/insertDataWeb') ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg">
                    <div class="form-daftar">
                        <label>Jenis Perlombaan</label>
                        <input type="text" class="form-control" name="jenis_lomba" value="Desain Web" disabled>
                    </div>

                    <div class="form-daftar">
                        <label>Email <small class="text-danger">* Pilih Salah Satu Email Anggota Tim</small><small class="text-danger"> (exp: example@gmail.com)</small></label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif" value="<?= old('email') ?>">
                    </div>

                    <div class="form-daftar">
                        <label>Nama TIM <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" name="nama_tim" placeholder="Masukkan Nama Tim" value="<?= old('nama_tim') ?>">
                    </div>

                    <div class="form-daftar">
                        <label>Asal Instansi <small class="text-danger">*</small></label>
                        <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi" value="<?= old('instansi') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
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
                        <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp:
                                0838345405878)</small></label>
                        <input type="text" class="form-control" name="wa_anggota1" placeholder="Masukkan Nomor Whatsapp" value="<?= old('wa_anggota1') ?>">
                    </div>
                    <div class="form-daftar">
                        <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                        <input type="file" class="form-control pt-3" name="scan_kartu_anggota1" value="<?= old('scan_kartu_anggota1') ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
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
                        <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp:
                                0838345405878)</small></label>
                        <input type="text" class="form-control" name="wa_anggota2" placeholder="Masukkan Nomor Whatsapp" value="<?= old('wa_anggota2') ?>">
                    </div>
                    <div class="form-daftar">
                        <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                        <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota2" value="<?= old('scan_kartu_anggota2') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
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
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>

            <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<div class="col-md-3">

</div>
</div>