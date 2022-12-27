<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-12 mx-auto tm-login-col">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="tm-block-title mb-4">Welcome to DIFEST 4.0, Login</h2>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">

            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
              <div class="alert alert-danger" role="alert">
                <ul>
                  <?php foreach ($errors as $key => $value) { ?>
                    <li><?= esc($value); ?></li>
                  <?php } ?>
                </ul>
              </div>
            <?php  } ?>
            <?php

            if (session()->getFlashdata('pesan')) {
              echo '<div class="alert bg-danger text-white" role="alert">';
              echo session()->getFlashdata('pesan');
              echo '</div>';
            }

            if (session()->getFlashdata('success')) {
              echo '<div class="alert" style="background-color: #d024bc; color: white;" role="alert">';
              echo session()->getFlashdata('success');
              echo '</div>';
            }

            ?>

            <form action="<?= base_url('Auth/cek_login') ?>" method="post" class="tm-login-form">
              <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control validate" id="username" value="" required />
              </div>
              <div class="form-group mt-3">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control validate" id="password" value="" required />
              </div>
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>