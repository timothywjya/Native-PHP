<?php

include 'head.php';
$idpengguna = $_SESSION["pengguna"]['idpengguna'];
$ambil = $koneksi->query("SELECT * FROM pengguna WHERE idpengguna='$idpengguna'");
$data = $ambil->fetch_assoc();
?>
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-address-card"></i> Profil
	</div>

	<div class="card-body">

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<form enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?php echo $data['idpengguna']; ?>">
						<div class="table-responsive">
							<table class="table table-striped">
								<tbody>
									<tr>
										<th scope="row" style="width: 174px;">Username</th>
										<td>
											: <?php echo $data['username']; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Nama Lengkap</th>
										<td>
											: <?php echo $data['nama']; ?>
										</td>
									</tr>
									<tr>
										<th scope="row">Email</th>
										<td>
											: <?php echo $data['email']; ?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>

					<div class="text-right">
						<a href="passwordganti.php">
							<button type="button" class="btn btn-warning pull-right">
								<i class="far fa-edit"></i> Edit Password
							</button>
						</a>
						<a href="profiledit.php">
							<button type="button" class="btn btn-success pull-right">
								<i class="far fa-edit"></i> Edit Profil
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php'; ?>