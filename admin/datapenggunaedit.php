<?php

include 'head.php';
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pengguna WHERE idpengguna='$id'");
$data = $ambil->fetch_assoc();
?>
<div class="card mb-3">

    <div class="card-header">
        <a href="datapenggunatambah.php" class="btn btn-primary"><i class="fa fa-plus"> </i> &nbsp;Tambah</a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['idpengguna']; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input value="<?= $data['nama'] ?>" type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input value="<?= $data['email'] ?>" type="text" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input value="<?= $data['username'] ?>" type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input value="" type="text" class="form-control" name="password" placeholder="Password">
                                <span class="text-danger">Kosongkan jika tidak ingin merubah password</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level" required>
                                    <option value="">Pilih Level Pengguna</option>
                                    <option value="Admin" <?php if ($data['level'] == 'Admin') echo 'selected'; ?>>Admin</option>
                                    <option value="Member" <?php if ($data['level'] == 'Member') echo 'selected'; ?>>Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submit" value="submit" class="btn btn-success pull-right">
                            <i class="far fa-save"></i> Simpan
                        </button>

                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    if ($_POST['password'] != "") {
                        $koneksi->query("UPDATE pengguna SET nama='$_POST[nama]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]',level='$_POST[level]' WHERE idpengguna='$id'") or die(mysqli_error($koneksi));
                    } else {
                        $koneksi->query("UPDATE pengguna SET nama='$_POST[nama]',email='$_POST[email]',username='$_POST[username]',level='$_POST[level]' WHERE idpengguna='$id'") or die(mysqli_error($koneksi));
                    }
                    echo "<script>alert('Data Pengguna Berhasil Diubah')</script>";
                    echo "<script>location='datapenggunadaftar.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php'; ?>