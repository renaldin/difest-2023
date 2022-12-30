<!-- /.content -->
<footer>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-8 col-sm-12">
                <img src="<?= base_url() ?>/../public/assets/img/logo.png" alt="" style="width: 200px; height:auto;">
                <p class="mt-3 mb-3">Present By :</p>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 pb-3 border-bottom">
                        <img src="<?= base_url() ?>/../public/assets/img/logoPOLSUB-HD.png" alt="">
                        <img src="<?= base_url() ?>/../public/assets/img/Logo Himmi.png" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-7 pb-3 border-bottom">
                        <p>Himpunan Mahasiswa Manajemen Informatika <br>
                            Politeknik Negeri Subang</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-12 text-white pt-3">
                        <a href=""><i class="fab fa-whatsapp fa-2x pe-2"></i></a>
                        <a href="<?= base_url('https://www.instagram.com/difest2023/') ?>"><i class="fab fa-instagram fa-2x pe-2"></i></a>
                        <a href=""><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                    <div class="col-lg-6 col-sm-12 pt-3">
                        <p>&copy;<b><?= date('Y') ?></b> Difest Himmi Polsub. All rights reserved. Designed by Dep. Ristek Himmi Polsub..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6493193695346!2d107.8256587142722!3d-6.565870366010456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693b9ae39cc0eb%3A0x76db7b3959df2011!2sPoliteknik%20Negeri%20Subang%2C%20Kampus%20II!5e0!3m2!1sid!2sid!4v1669213764820!5m2!1sid!2sid" width="100%" height="250" style="border:0; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>
<!-- ./wrapper -->
<!-- Aos -->
<script src="<?= base_url() ?>/../public/source/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/../public/source/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/isotope.min.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/owl-carousel.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/tabs.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/popup.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/custom.js"></script>
<script src="<?= base_url() ?>/../public/assets/js/timer.js"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1500, 0).slideUp(1500, function() {
            $(this).remove();
        });
    }, 8000);
</script>

</body>

</html>