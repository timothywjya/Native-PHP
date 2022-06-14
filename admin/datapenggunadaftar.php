<?php

include 'head.php';
?>
<div class="card mb-3">

    <div class="card-header">
        <a href="datapenggunatambah.php" class="btn btn-primary"><i class="fa fa-plus"> </i> &nbsp;Tambah</a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM pengguna"); ?>
                            <?php while ($data = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['username'] ?></td>
                                    <td><?php echo $data['password'] ?></td>
                                    <td><?php echo $data['level'] ?></td>
                                    <td>
                                        <a href="datapenggunaedit.php?id=<?php echo $data['idpengguna']; ?>" class="btn btn-success">Ubah</a>
                                        <a href="datapenggunahapus.php?id=<?php echo $data['idpengguna']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini')">Hapus</a>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php'; ?>