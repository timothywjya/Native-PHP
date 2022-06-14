<html>
<?php
include '../koneksi.php';
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>
		Gajah Mada Petshop - Admin
	</title>
	<link rel="icon" type="image/x-icon" href="../assets/images/paw-icon.png">
	<link href="../assets/admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/admin/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/admin/assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="../assets/admin/css/sb-admin.css" rel="stylesheet">
	<script src="../assets/admin/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</head>

<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark static-top style=" style="border-bottom-width: 0px;background-color:#262626">
		<a style="color: #ffffff;font-size:20px;" href="dashboard.php">
			<?= $_SESSION["pengguna"]['nama'] ?>
		</a>
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

		</form>
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item">
				<a class="nav-link " id="sidebarToggle">
					<i class="fas fa-bars"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
					<i class="fas fa-logout">Logout</i>
				</a>
			</li>
		</ul>
	</nav>

	<div id="wrapper">

		<ul class="sidebar navbar-nav" style="background-color:#262626">
			<li class="nav-item">
				<a class="nav-link" href="dashboard.php">
					<i class="fas fa-fw fa-home"></i>
					<span>&nbsp; Beranda</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profil.php">
					<i class="fas fa-fw fa-user"></i>
					<span>&nbsp; Profil</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="datapenggunadaftar.php">
					<i class="fas fa-fw fa-users"></i>
					<span>&nbsp; Data Pengguna</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="datavideodaftar.php">
					<i class="fas fa-fw fa-video"></i>
					<span>&nbsp; Data Video</span>
				</a>
			</li>
		</ul>
		<div id="content-wrapper">

			<div class="container-fluid">