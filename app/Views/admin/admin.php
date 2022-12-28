<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Selamat datang kembali, <b><?= session()->get('nama') ?></b></p>
        </div>
    </div>

    <!-- row -->
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller">
                <h2 class="tm-block-title">Total Peserta Per Mata Lomba</h2>
                <div id="pieChartContainer">
                    <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                <h2 class="tm-block-title">Pendaftaran Peserta Terbaru</h2>
                <div class="tm-notification-items">
                    <?php foreach ($log as $item) { ?>
                        <div class="media tm-notification-item">
                            <div class="tm-gray-circle"><img src="<?= base_url('gambar/logo.png') ?>" width="100%" alt="Logo" class="rounded-circle"></div>
                            <div class="media-body">
                                <p class="mb-1"><b><?= $item['jenis_lomba'] ?></b></p>
                                <p class="mb-3"><?= $item['nama'] ?></p>
                                <span class="tm-small tm-text-color-secondary"><?= $item['tanggal'] ?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>