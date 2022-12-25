<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="row mb-2">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</button>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-lg-12">
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
                            echo '<div class="alert" style="background-color: #d024bc; color: white;" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>

                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">Username</th>
                                <th scope="col">Role</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($user as $item) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td class="tm-product-name"><?= $item['nama_user'] ?></td>
                                    <td class="tm-product-name"><?= $item['username'] ?></td>
                                    <td class="tm-product-name"><span class="badge" style="background-color: #d024bc; color: white;"><?= $item['role'] ?></span></td>
                                    <td class="text-center">
                                        <button type="button" style="cursor: pointer;" class="tm-product-delete-link mb-1" data-toggle="modal" data-target="#edit<?= $item['id_user'] ?>">
                                            <i class="fa fa-edit tm-product-delete-icon"></i>
                                        </button>
                                        <button type="button" style="cursor: pointer;" class="tm-product-delete-link mb-1" data-toggle="modal" data-target="#delete<?= $item['id_user'] ?>">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </button>
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

<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-md ">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-center text-white">Tambah <?= $title; ?></h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open_multipart('user/add');
                ?>

                <div class="form-group">
                    <label for="nama_user">Nama User</label>
                    <input type="text" class="form-control" name="nama_user" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="custom-select" required>
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Panitia">Panitia</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>

<?php foreach ($user as $item) { ?>
    <div class="modal fade" id="edit<?= $item['id_user'] ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h4 class="modal-title text-center text-white">Edit <?= $title; ?></h4>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open_multipart('user/edit/' . $item['id_user']);
                    ?>

                    <div class="form-group">
                        <label for="nama_user">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" value="<?= $item['nama_user'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $item['username'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" class="custom-select" required>
                            <option value="<?= $item['role'] ?>"><?= $item['role'] ?></option>
                            <option value="Admin">Admin</option>
                            <option value="Panitia">Panitia</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($user as $item) { ?>
    <div class="modal fade" id="delete<?= $item['id_user'] ?>">
        <div class="modal-dialog modal-md ">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h4 class="modal-title text-center text-white">Hapus <?= $title; ?></h4>
                </div>
                <div class="modal-body">
                    <p class="text-white mt-5 mb-5">Apakah Anda akan menghapus pengguna, <b><?= $item['nama_user'] ?></b> ?</p>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('user/delete/' . $item['id_user']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>