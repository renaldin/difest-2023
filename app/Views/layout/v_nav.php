<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
  <ul class="nav navbar-nav">
    <?php if (session()->get('log') != true) { ?>
      <li><a href="<?= base_url('/home') ?>">Home</a></li>
      <li><a href="<?= base_url('pendaftaran') ?>">Pendaftaran</a></li>
    <?php } ?>

  </ul>
</div>
</nav>
</header>
<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
          Top Navigation
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> -->
    <!-- Main content -->
    <section class="content">