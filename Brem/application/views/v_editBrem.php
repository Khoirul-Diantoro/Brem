<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Edit Data Pesanan Brem</title>
</head>

<body>
<form action="<?php echo base_url().'c_inputBrem'; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<fieldset>
	<legend><h3>Data Brem</h3></legend>
	<table>
		<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td><input name="no_tlp" type="text" id="no_tlp" size="50" value="<?php echo $edit->no_tlp; ?>" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input name="alamat" type="text" id="alamat" size="50" value="<?php echo $edit->alamat; ?>" /></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input name="jumlah" type="text" id="jumlah" size="50" value="<?php echo $edit->jumlah; ?>" /></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<select name="kategori" id="kategori" value="<?php echo $edit->kategori; ?>">
					<option value="">--Pilih Kategori--</option>
					<option value="merah">merah</option>
					<option value="coklat">coklat</option>
					<option value="original">original</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto" id="foto" value="<?php echo $edit->foto; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="simpan" id="simpan" value="simpan" /></td>
		</tr>
	</table>	
	</fieldset>
	
</form>
</body>
</html>