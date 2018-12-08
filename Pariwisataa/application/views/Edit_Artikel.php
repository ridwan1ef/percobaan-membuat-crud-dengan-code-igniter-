
	<h1> Edit Data Artikel </h1>
	<table>
		<form method="POST" action="../Edit_Artikel_proses" enctype="multipart/form-data">
		<input type="hidden" name="ID_Artikel" value="<?php echo $artikel['ID_Artikel'];?>">
		<input type="hidden" name="foto_lama" value="<?php echo $artikel['Gambar'];?>">
		<tr>
			<td> Judul Artikel </td>
			<td><input type="text" name="Judul_Artikel" value="<?php echo $artikel['Judul_Artikel'];?>"></td>
		</tr>
		<tr>
			<td> Isi </td>
			<td><input type="text" name="Isi" value="<?php echo $artikel['Isi'];?>"></td>
		</tr>
		<tr>
			<td> Penulis </td>
			<td><input type="text" name="Penulis" value="<?php echo $artikel['Penulis'];?>"></td>
		</tr>
		<tr>
			<td> Gambar </td>
			<td><input type="file" name="Gambar">
				<img src="<?php echo base_url().'images/'.$artikel['Gambar'];?>"width="100"></td>
		</tr>
		<tr>
			<td><input type="submit" value="KIRIM"></td>
			<td><input type="reset" value="RESET"></td>
		</tr>
		</form>
	</table>
</body>
</html>
