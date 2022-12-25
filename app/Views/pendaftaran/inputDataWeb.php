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
        echo form_open_multipart('pendaftaran/insertDataWeb');
        ?>
        <div class="row">
            <div class="col-lg">
                <div class="form-daftar">
                    <label>Jenis Perlombaan</label>
                    <input type="text" class="form-control" name="jenis_lomba" value="Desain Web" disabled>
                </div>

                <div class="form-daftar">
                    <label>Email <small class="text-danger">* Pilih Salah Satu Email Anggota Tim</small><small
                            class="text-danger"> (exp: example@gmail.com)</small></label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif">
                </div>

                <div class="form-daftar">
                    <label>Nama TIM <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_tim" placeholder="Masukkan Nama Tim">
                </div>

                <div class="form-daftar">
                    <label>Asal Instansi <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 COL-SM-12">
                <!-- anggota 1 -->
                <div class="form-daftar">
                    <label>Nama Anggota 1 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota1" placeholder="Masukkan Nama Anggota 1">
                </div>
                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota1" placeholder="Masukkan Alamat">
                </div>
                <div class="form-daftar">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp:
                            0838345405878)</small></label>
                    <input type="text" class="form-control" name="wa_anggota1" placeholder="Masukkan Nomor Whatsapp">
                </div>
                <div class="form-daftar">
                    <label>Instagram <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instagram_anggota1" placeholder="Masukkan Instagram">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota1">
                </div>
            </div>
            <div class="col-lg-6 COL-SM-12">
                <!-- anggota 2 -->
                <div class="form-daftar">
                    <label>Nama Anggota 2 <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_anggota2" placeholder="Masukkan Nama Anggota 2">
                </div>
                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat_anggota2" placeholder="Masukkan Alamat">
                </div>
                <div class="form-daftar">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp:
                            0838345405878)</small></label>
                    <input type="text" class="form-control" name="wa_anggota2" placeholder="Masukkan Nomor Whatsapp">
                </div>
                <div class="form-daftar">
                    <label>Instagram <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instagram_anggota2" placeholder="Masukkan Instagram">
                </div>
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="scan_kartu_anggota2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>difest2022</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_igdifest">
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <i>himmi.polsub</i> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" id="preview_gambar" name="bukti_ighimmi">
                </div>
            </div>
            <div class="cl-lg-12 col-sm-6">
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
        
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<div class="col-md-3">

</div>
</div>