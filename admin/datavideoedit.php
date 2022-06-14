<?php

include 'head.php';
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM video WHERE idvideo='$id'");
$data = $ambil->fetch_assoc();
?>
<div class="card mb-3">

    <div class="card-header">
        <a href="datavideotambah.php" class="btn btn-primary"><i class="fa fa-plus"> </i> &nbsp;Tambah</a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['idpengguna']; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul Video</label>
                                <input type="text" value="<?= $data['judulvideo'] ?>" class="form-control" name="judulvideo" placeholder="Judul Video" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Link Video</label>
                                <input type="text" value="<?= $data['linkvideo'] ?>" class="form-control" name="linkvideo" placeholder="Link Video" required>
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
                    $koneksi->query("UPDATE video SET judulvideo='$_POST[judulvideo]',linkvideo='$_POST[linkvideo]' WHERE idvideo='$id'");
                    echo "<script>alert('Data Video Berhasil Diubah')</script>";
                    echo "<script>location='datavideodaftar.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php'; ?>