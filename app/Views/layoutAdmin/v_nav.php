<nav class="navbar navbar-expand-xl">
  <div class="container h-100">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <h1 class="tm-site-title mb-0">DIFEST <span class="text-primary">4.0</span> <small>Admin</small></h1>
    </a>
    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars tm-nav-icon"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('role')) { ?>
        <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item">
            <a class="nav-link <?= $title === 'Admin' ? 'active' : '' ?>" href="index.html">
              <i class="fas fa-tachometer-alt"></i> Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog"></i>
              <span> Lomba <i class="fas fa-angle-down"></i> </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Desain Maskot</a>
              <a class="dropdown-item" href="#">Desain Web</a>
              <a class="dropdown-item" href="#">Desain Poster</a>
              <a class="dropdown-item" href="#">Photography</a>
              <a class="dropdown-item" href="#">Short Movie</a>
            </div>
          </li>
          <?php if (session()->get('role') === 'Admin') { ?>
            <li class="nav-item">
              <a class="nav-link <?= $title === 'Pengguna' ? 'active' : '' ?>" href="<?= base_url('user') ?>">
                <i class="far fa-user"></i> Pengguna
              </a>
            </li>
          <?php } ?>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link d-block" href="<?= base_url('auth/logout') ?>">
              <?= session()->get('nama') ?>, <b>Logout</b>
            </a>
          </li>
        </ul>
      <?php } ?>
    </div>
  </div>
</nav>