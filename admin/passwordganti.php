<?php

include 'head.php';
$idpengguna = $_SESSION["pengguna"]['idpengguna'];
$ambil = $koneksi->query("SELECT * FROM pengguna WHERE idpengguna='$idpengguna'");
$data = $ambil->fetch_assoc(); ?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-key"></i></i> Ganti Password <?= $data['password'] ?>
    </div>

    <div class="card-body">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <form method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password Lama</label>
                                    <input type="password" class="form-control" name="password_lama" placeholder="Password Lama" data-toggle="password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" name="password_baru" placeholder="Password Baru" data-toggle="password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password Baru" data-toggle="password">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="profil.php">
                                <button type="button" class="btn btn-primary pull-right">
                                    <i class="fas fa-arrow-left"></i> Kembali</button>
                            </a>

                            <button type="submit" name="submit" value="submit" class="btn btn-success pull-right">
                                <i class="far fa-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        if ($_POST['password_lama'] != $data['password']) {
                            echo "<script>alert('Password lama anda salah');</script>";
                        } elseif ($_POST['password_baru'] != $_POST['confirm_password']) {
                            echo "<script>alert('Password baru dengan Konfirmasi Password tidak sama');</script>";
                        } else {
                            $koneksi->query("UPDATE pengguna SET password='$_POST[password_baru]' WHERE idpengguna='$idpengguna'");
                            echo "<script>alert('Password berhasil diubah');</script>";
                            echo "<script>location='profil.php';</script>";
                        }
                    }
                    ?>
                </div>
                <div class="col-md-3"></div>
            </div>

        </div>
    </div>
</div>
<?php
include 'footer.php'; ?>