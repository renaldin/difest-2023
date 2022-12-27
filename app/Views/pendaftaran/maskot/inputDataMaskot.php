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
            <h4>Daftar Desain Maskot</h4>
        </div>
    </div>
</div>

<div class="page-content">
    <?php $errors = session()->getFlashdata('errors'); ?>
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
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['email'] ?></small><?php } ?>
                </div>

                <div class="form-daftar">
                    <label>Nama Lengkap <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nama_peserta" placeholder="Masukkan Nama Lengkap" value="<?= old('nama_peserta') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['nama_peserta'] ?></small><?php } ?>
                </div>

                <div class="form-daftar">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= old('alamat') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['alamat'] ?></small><?php } ?>
                </div>
                <div class="form-daftar">
                    <label>Asal Instansi <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="instansi" placeholder="Masukkan Asal Instansi" value="<?= old('instansi') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['instansi'] ?></small><?php } ?>
                </div>

                <div class="form-daftar">
                    <label>Nomor Whatsapp <small class="text-danger">*</small><small class="text-danger"> (exp: 0838345405878)</small></label>
                    <input type="text" class="form-control" name="wa" placeholder="Masukkan Nomor Whatsapp" value="<?= old('wa') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['wa'] ?></small><?php } ?>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-daftar">
                    <label>Scan Kartu Pelajar <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="scan_kartu" value="<?= old('scan_kartu') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['scan_kartu'] ?></small><?php } ?>
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <a href="<?= base_url('https://www.instagram.com/difest2023/') ?>">@difest2023</a> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_igdifest" value="<?= old('bukti_igdifest') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['bukti_igdifest'] ?></small><?php } ?>
                </div>
                <div class="form-daftar">
                    <label>Bukti Follow Instagram <a href="<?= base_url('https://www.instagram.com/himmi.polsub/') ?>">@himmi.polsub</a> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_ighimmi" value="<?= old('bukti_ighimmi') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['bukti_ighimmi'] ?></small><?php } ?>
                </div>
                <div class="form-daftar">
                    <label>Bukti Subscribe Youtube <a href="<?= base_url('https://www.youtube.com/@mipolsubofficial7516/') ?>">MI Polsub Official</a> <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_ythimmi" value="<?= old('bukti_ythimmi') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['bukti_ythimmi'] ?></small><?php } ?>
                </div>
                <div class="form-daftar">
                    <label>Bukti Pembayaran <small class="text-danger">*</small></label>
                    <input type="file" class="form-control pt-3" name="bukti_pembayaran" value="<?= old('bukti_pembayaran') ?>">
                    <?php if (!empty($errors)) { ?><small class="text-danger"><?= $errors['bukti_pembayaran'] ?></small><?php } ?>
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