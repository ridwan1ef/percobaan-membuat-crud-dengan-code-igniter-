
	<h1> Edit Data Gallery </h1>
	<table>
		<form method="POST" action="../Edit_Gallery_proses" enctype="multipart/form-data">
		<input type="hidden" name="ID_Gallery" value="<?php echo $gallery['ID_Gallery'];?>">
		<input type="hidden" name="foto_lama" value="<?php echo $gallery['Gambar'];?>">
		<tr>
			<td> ID Objek </td>
			<td><input type="text" name="ID_Objek" value="<?php echo $gallery['ID_Objek'];?>"></td>
		</tr>
		<tr>
			<td> Judul Gambar </td>
			<td><input type="text" name="Judul_Gambar" value="<?php echo $gallery['Judul_Gambar'];?>"></td>
		</tr>
		<tr>
			<td> Keterangan Gambar </td>
			<td><input type="text" name="Keterangan_Gambar" value="<?php echo $gallery['Keterangan_Gambar'];?>"></td>
		</tr>
		<tr>
			<td> Gambar </td>
			<td><input type="file" name="Gambar">
				<img src="<?php echo base_url().'images/'.$gallery['Gambar'];?>"width="100"></td>
		</tr>
		<tr>
			<td><input type="submit" value="KIRIM"></td>
			<td><input type="reset" value="RESET"></td>
		</tr>
		</form>
	</table>
</body>
</html>
