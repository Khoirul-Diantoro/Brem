<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APK Pemesanan BREM</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos" bgcolor="red">
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
			<p>Pada Bagian Ini digunakan untuk melakukan perhitungan dengan calculator</p>
		</div>
	</section><center>

	<!-- service -->
	<section class="CALCULATOR">
		<div class="container">
			<h3>CALCULATOR</h3>
			<div class="wrap">
	<form name="cal">
		<input type="text" name="display">
		<br><br>
		<input type="button" value="9" onclick="cal.display.value+='9'">
		<input type="button" value="8" onclick="cal.display.value+='8'">
		<input type="button" value="7" onclick="cal.display.value+='7'">
		<input type="button" value="+" onclick="cal.display.value+='+'">
		<br><br>
		<input type="button" value="6" onclick="cal.display.value+='6'">
		<input type="button" value="5" onclick="cal.display.value+='5'">
		<input type="button" value="4" onclick="cal.display.value+='4'">
		<input type="button" value="-" onclick="cal.display.value+='-'">
		<br><br>
		<input type="button" value="3" onclick="cal.display.value+='3'">
		<input type="button" value="2" onclick="cal.display.value+='2'">
		<input type="button" value="1" onclick="cal.display.value+='1'">
		<input type="button" value="*" onclick="cal.display.value+='*'">
		<br><br>
		<input type="button" value="0" onclick="cal.display.value+='0'">
		<input type="button" value="/" onclick="cal.display.value+='/'">
		<input type="button" value="%" onclick="cal.display.value+='%'">
		<input type="button" value="=" onclick="cal.display.value=eval(cal.display.value)">
		<br><br>
		<input type="button" value="DELETE" onclick="cal.display.value= ''" id="del">
	</form>
</div>	
	</center></section>


	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Dandy Dicky T,Andrean Ludvi N A,Andriyan Tatak W. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>