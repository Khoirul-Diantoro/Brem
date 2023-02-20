<div class ="kiri">
<h2>Tambah User</h2>
<form method ="post">
    <input type="text" name ="Username" placeholder ="UserName">
    <input type="password" name ="Password" placeholder ="Password">
    <input type="text" name ="Name" placeholder ="Name">
    <input type="submit" name ="simpan" value="Simpan">
</form>
</div>

<div class ="kanan">
<h2>data User</h2>
<table>
    <tr>
        <td>No.</td>
        <td>User Name </td>
        <td>Password</td>
        <td>Name</td>
        <td>action</td>
    </tr>
    <?php $no = 1 ; foreach($akun as $dakun) : ?>
    <tr>
        <td><?php echo $no ;?></td>
        <td><?php echo $dakun ->username;?> </td>
        <td><?php echo $dakun ->password;?></td>
        <td><?php echo $dakun ->name;?></td>
        <td>
			<a href="<?php echo base_url().'c_tampilAkun/edit/'.$dakun->username; ?>">Edit  | </a>
            <a href="<?php echo base_url().'c_tampilAKun/hapus/'.$dakun->username; ?> " onclick="return confirm('Yakin Hapus Data ini ?')">Hapus</a>
		</td>
    </tr>
    <?php $no++; endforeach ; ?>
</table>
</div>
