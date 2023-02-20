<div class ="kiri">
<h2>Tambah User</h2>
<form method ="post">
    <input type="text" name ="name" placeholder ="Nama Barang" value="<?php echo $edit->name; ?>">
    <input type="text" name ="stok" placeholder ="Stok" value="<?php echo $edit->stok; ?>">
    <input type="text" name ="harga" placeholder ="Harga" value="<?php echo $edit->harga; ?>">
    <input type="submit" name ="simpan" value="Simpan">
</form>
</div>

<div class ="kanan">
<h2>data User</h2>
<table>
    <tr>
        <td>No.</td>
        <td>Nama Barang </td>
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
			<a href="<?php echo base_url().'c_tampilBarang/edit/'.$dbarang->name; ?>">Edit  | </a>
            <a href="<?php echo base_url().'c_tampilBarang/hapus/'.$dbarang->name; ?> " onclick="return confirm('Yakin Hapus Data ini ?')">Hapus</a>
		</td>
    </tr>
    <?php $no++; endforeach ; ?>
</table>
</div>
