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
            <h4>Daftar Photography</h4>
        </div>
    </div>
</div>
<div class="page-content">
    <div data-aos="zoom-in-down">

        <?php
        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach ($errors as $key => $value) { ?>
                <li>
                    <?= esc($value); ?>
                </li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>

        <?php
        echo form_open_multipart('pendaftaran/insertDataPhotography');
        ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Jenis Perlombaan</label>
                    <input type="text" class="form-control" name="jenis_lomba" value="Photography" disabled>
                </div>

                <div class="form-daftar">
                    <label>Email <small class="text-danger">*</small><small class="text-danger"> (exp:
                            example@gmail.com)</small></label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif Anda">
                </div>

                <div class="form-daftar">
                    <label>Nama Lengkap <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                </div>

                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                </div>

                <div class="form-daftar">
                    <label>Asal Instansi <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi">
                </div>

                <div class="form-daftar">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp:
                            0838345405878)</small></label>
                    <input type="number" class="form-control" name="wa" placeholder="Masukkan Nomor Whatsapp">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-daftar">
                    <label>Instagram <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instagram" placeholder="Masukkan Instagram">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu">
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>difest2022</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_igdifest">
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>himmi.polsub</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_ighimmi">
                </div>
                <div class="form-daftar">
                    <label>Bukti Subscribe Youtube <i>Media Himmi</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_ythimmi">
                </div>
                <div class="form-daftar">
                    <label>Bukti Pembayaran <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_pembayaran">
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
    </div>
</div>