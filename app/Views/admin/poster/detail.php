<!-- judul -->
<section class="content-header">
    <h1>
        <a class="btn bg-purple-gradient" href="<?= base_url('desain_poster') ?>"><?= $title; ?></a>
        <small><?= $desain_poster['nama_lengkap']; ?></small>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12" data-aos="zoom-in-down">
        <div class="box box-solid">
            <div class="box-header with-border bg-purple">
                <h3 class="box-title">Data Pendaftaran</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Jenis Lomba</th>
                        <td width="20px">:</td>
                        <td><?= $desain_poster['jenis_lomba']; ?></td>
                    </tr>
                    <tr>
                        <th>Instansi</th>
                        <td>:</td>
                        <td><?= $desain_poster['instansi']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>:</td>
                        <td><?= $desain_poster['nama_lengkap']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?= $desain_poster['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?= $desain_poster['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Whatsapp</th>
                        <td>:</td>
                        <td><?= $desain_poster['wa']; ?></td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>:</td>
                        <td><?= $desain_poster['instagram']; ?></td>
                    </tr>
                    <tr>
                        <th>Bukti Scan Kartu Pelajar</th>
                        <td>:</td>
                        <td><img src="<?= base_url('fotoposter/' . $desain_poster['scan_kartu']) ?>" alt="" height="100" width="100"></td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-sm-12" data-aos="zoom-in-down">
        <div class="box box-solid">
            <div class="box-header with-border bg-purple">
                <h3 class="box-title">Bukti</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered">
                    <tr>
                        <th>Bukti Follow Instagram difest2022</th>
                        <td>:</td>
                        <td><img src="<?= base_url('fotoposter/' . $desain_poster['bukti_igdifest']) ?>" height="100" width="100" alt=""></td>
                    </tr>
                    <tr>
                        <th>Bukti Follow Instagram himmi.polsub</th>
                        <td>:</td>
                        <td><img src="<?= base_url('fotoposter/' . $desain_poster['bukti_ighimmi']) ?>" height="100" width="100" alt=""></td>
                    </tr>
                    <tr>
                        <th>Bukti Subscribe Youtube Media Himmi</th>
                        <td>:</td>
                        <td><img src="<?= base_url('fotoposter/' . $desain_poster['bukti_ythimmi']) ?>" height="100" width="100" alt=""></td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-sm-12" data-aos="zoom-in-down">
        <div class="box box-solid">
            <div class="box-header with-border bg-purple">
                <h3 class="box-title">Bukti Pembayaran</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <center><img src="<?= base_url('fotoposter/' . $desain_poster['bukti_pembayaran']) ?>" height="500" width="80%" alt=""></center>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>