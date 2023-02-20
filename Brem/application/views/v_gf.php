<?php 

        $koneksi = new mysqli("localhost","root","","brem01");

        $merah = $koneksi->query("select * from datapesanan where kategori='merah'");
        $jml_merah = $merah->num_rows;

        $coklat = $koneksi->query("select * from datapesanan where kategori='coklat'");
        $jml_coklat = $coklat->num_rows;

        $original = $koneksi->query("select * from datapesanan where kategori='original'");
        $jml_original = $original->num_rows;

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APK Pemesanan BREM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

	<!-- label -->


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


 	<center>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Brem merah", <?php echo $jml_merah ?>, "red"],
        ["Brem coklat", <?php echo $jml_coklat ?>, "brown"],
        ["Brem original", <?php echo $jml_original ?>, "white"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Riwayat jenis BREM yang dipesan",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>

</center></section>



	<!-- footer -->



	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>