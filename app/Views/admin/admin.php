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
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Jessica</b> and <b>6 others</b> sent you new <a href="#" class="tm-notification-link">product updates</a>. Check new orders.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Oliver Too</b> and <b>6 others</b> sent you existing <a href="#" class="tm-notification-link">product updates</a>. Read more reports.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Victoria</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">order updates</a>. Read order information.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product records</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">order stuffs</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product updates</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product updates</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product updates</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                    <div class="media tm-notification-item">
                        <div class="tm-gray-circle"><img src="<?= base_url('templateAdmin') ?>/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                        <div class="media-body">
                            <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="#" class="tm-notification-link">product updates</a>.</p>
                            <span class="tm-small tm-text-color-secondary">6h ago.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>