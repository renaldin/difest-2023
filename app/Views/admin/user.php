<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="row mb-2">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</button>
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
                                        <a href="#" class="tm-product-delete-link mb-1">
                                            <i class="fa fa-edit tm-product-delete-icon"></i>
                                        </a>
                                        <a href="#" class="tm-product-delete-link mb-1">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
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