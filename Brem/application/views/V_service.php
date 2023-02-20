<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APK Pemesanan BREM</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css' ?> ">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
			</ul>
		</div>
	</div>
    <header>
        <div class="container">
            <h1><a href="">BREM</a></h1>
            <ul>
                <li class="active"><a href="C_beranda">Home</a></li>
                <li><a href="<?php echo base_url() . 'C_service'; ?>">Service</a></li>
                <li><a href="c_contact">Contact</a></li>
                <li><a href="c_cc">Calculator</a></li>
                <li><a href="c_tampilAkun">Dashboard</a></li>
                <li><a href="<?php echo base_url() . 'C_login/logout'; ?>">LOGOUT</a></li>
            </ul>
        </div>
    </header>


	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Pada Bagian Ini Melayani Pemesanan BREM Dan Pengecekan Riwayat Dari Pemesanan Yang Telah Dilakukan</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>

			<h4>
				<center>Setelah Pemesanan BREM akan dikirim paling lambat keesokan harinya</center>
			</h4>
			<h2>
				<center>Pastikan Data Sudah Benar Sebelum Melakukan Konfirmasi</center>
			</h2>
			<div class="box" >
				<div class="col-4" style="margin-left: 37%;">
					<h4>
						<center><a href="<?php echo base_url().'c_inputBrem' ?>">RIWAYAT PEMESANAN</a></center>
					</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Dandy Dicky T,Andrean Ludvi N A,Andriyan Tatak W. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
</body>

</html>