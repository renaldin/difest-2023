<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <h2 class="tm-block-title">Daftar Peserta <?= $title ?></h2>
                <div class="row mb-2">
                    <div class="col-lg-8">
                        <form action="<?= base_url('shortmovie') ?>" method="POST">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <input type="text" name="keyword" class="form-control" value="<?= $keyword ? $keyword : '' ?>">
                                </div>
                                <div class=" col-lg-4 mb-2">
                                    <button type="submit" class="btn btn-primary" style="float: left;">Cari</button>
                                    <?php if ($cari === 'Aktif') { ?>
                                        <a href="<?= base_url('shortmovie') ?>" class="btn btn-secondary" style="float: left;">Clear</a>
                                    <?php } ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Tim</th>
                                <th scope="col">Email</th>
                                <th scope="col">Instansi</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($shortmovie as $item) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td class="tm-product-name"><?= $item['nama_tim'] ?></td>
                                    <td class="tm-product-name"><?= $item['email'] ?></td>
                                    <td class="tm-product-name"><?= $item['instansi'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('shortmovie/detail/' . $item['id_pendaftaran_movie']) ?>" class="tm-product-delete-link mb-1">
                                            <i class="fa fa-eye tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>