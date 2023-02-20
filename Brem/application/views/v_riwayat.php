<!DOCTYPE html>
<html>

<head>
	<title>IDCard</title>
</head>

<body>

	<h1 style="text-align: center;">Data Pesanan BREM</h1>
	<center><a href="<?php echo base_url() . 'C_beranda' ?>">Home</a></center>

	<table border="1" style="margin: auto;">
		<thead>
			<tr>
				<th>No</th>
				<th>no_tlp</th>
				<th>alamat</th>
				<th>kategori</th>
				<th>jumlah</th>
				<th>Foto</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($brem as $dbrem) : ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $dbrem->no_tlp; ?></td>
					<td><?php echo $dbrem->alamat; ?></td>
					<td><?php echo $dbrem->kategori; ?></td>
					<td><?php echo $dbrem->jumlah; ?></td>
					<td>
						<center>
							<img src="./assets/image/<?php echo $dbrem->foto; ?>" border="0" width="90px" height="90px" />
						</center>
					</td>
					<td>
						<a href="<?php echo base_url().'c_inputBrem/edit/'.$dbrem->no_tlp; ?>">Edit</a>
					</td>
					<td>
						<a href="<?php echo base_url().'c_inputBrem/hapus/'.$dbrem->no_tlp; ?> " onclick="return confirm('Yakin Hapus Data ini ?')">Hapus</a>
					</td>
				</tr>
			<?php $no++;
			endforeach; ?>

		</tbody>
	</table>


</body>

</html>