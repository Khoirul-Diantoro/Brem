<div class ="kiri">
<h2>Tambah Barang</h2>
<form method ="post">
    <input type="text" name ="name" placeholder ="Nama Barang">
    <input type="text" name ="stok" placeholder ="Stok Barang">
    <input type="text" name ="harga" placeholder ="Harga">
    <input type="submit" name ="simpan" value="Simpan">
</form>
</div>

<div class ="kanan">
<h2>Data Barang</h2>
<table>
    <tr>
        <td>No.</td>
        <td>Nama Barang</td>
        <td>Stok</td>
        <td>Harga</td>
        <td>action</td>
    </tr>
    <?php $no = 1 ; foreach($barang as $dbarang) : ?>
    <tr>
        <td><?php echo $no ;?></td>
        <td><?php echo $dbarang ->name;?> </td>
        <td><?php echo $dbarang ->stok;?></td>
        <td><?php echo $dbarang ->harga;?></td>
        <td>
			<a href="<?php echo base_url().'c_tampilBarang/edit/'.$dbarang->id_barang; ?>">Edit  | </a>
            <a href="<?php echo base_url().'c_tampilBarang/hapus/'.$dbarang->id_barang; ?> " onclick="return confirm('Yakin Hapus Data ini ?')">Hapus</a>
		</td>
    </tr>
    <?php $no++; endforeach ; ?>
</table>
</div>
