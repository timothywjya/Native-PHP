<?php

include 'head.php';
$idpengguna = $_SESSION["pengguna"]['idpengguna'];
$ambil = $koneksi->query("SELECT * FROM pengguna WHERE idpengguna='$idpengguna'");
$data = $ambil->fetch_assoc();
?>
<div class="card mb-3">

	<div class="card-header">
		<i class="fa fa-pen"></i></i> Edit Profil
	</div>

	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $data['idpengguna']; ?>">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" placeholder="Username" readonly>
							</div>
						</div>

					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>">
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $data['email']; ?>">
							</div>
						</div>
					</div>


					<div class="text-right">
						<a href="profil.php">
							<button type="button" class="btn btn-warning pull-right">
								<i class="fas fa-edit"></i> Edit Password</button>
						</a>
						<button type="submit" name="submit" value="submit" class="btn btn-success pull-right">
							<i class="far fa-save"></i> Simpan
						</button>

					</div>

				</form>
				<?php
				if (isset($_POST['submit'])) {
					$ambilemail = $koneksi->query("SELECT*FROM pengguna WHERE email='$_POST[email]'");
					$yangcocok = $ambilemail->num_rows;
					if ($_POST['email'] != $data['email']) {
						if ($yangcocok == 1) {
							echo "<script>alert('Ubah profil gagal, email sudah ada');</script>";
						} else {
							$koneksi->query("UPDATE pengguna SET nama='$_POST[nama]', email='$_POST[email]' WHERE idpengguna='$idpengguna'");
							echo "<script>alert('Profil berhasil diubah');</script>";
							echo "<script>location='profil.php';</script>";
						}
					} else {
						$koneksi->query("UPDATE pengguna SET nama='$_POST[nama]', email='$_POST[email]' WHERE idpengguna='$idpengguna'");
						echo "<script>alert('Profil berhasil diubah');</script>";
						echo "<script>location='profil.php';</script>";
					}
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php'; ?>