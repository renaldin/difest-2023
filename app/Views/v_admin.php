<div class="row" id="home">
    <div class="col-sm-12">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert bg-purple" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>
    </div>
    <center>
        <div class="col-sm-12" data-aos="zoom-in-up">
            <img class="img-responsive pad" width="60%" src="<?= base_url() ?>/gambar/maskot-owl.png" alt="Photo">
        </div>
    </center>
</div>