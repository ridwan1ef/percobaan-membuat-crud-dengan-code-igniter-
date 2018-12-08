
	<h1> Data Artikel </h1>
	<?php echo anchor('Artikel/tambah_data_artikel','Tambah Artikel'); ?><br />
	<table border>
	<tr>
		<td> No </td>
		<td> ID Artikel </td>
		<td> Judul Artikel </td>
		<td> Isi </td>
		<td> Penulis </td>
		<td> Gambar </td>
		<td> Aksi </td>
	</tr>
	<?php
	$no=1;
	foreach($artikel as $data){
	?>
	<tr>
		<td><?php echo$no++;?></td>
		<td><?php echo $data['ID_Artikel'];?></td>
		<td><?php echo $data['Judul_Artikel'];?></td>
		<td><?php echo $data['Isi'];?></td>
		<td><?php echo $data['Penulis'];?></td>
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td>
		<td><?php echo anchor('Artikel/Edit_Artikel/'.$data['ID_Artikel'],'EDIT');?>
			<?php echo anchor('Artikel/Hapus_Artikel/'.$data['ID_Artikel'],'HAPUS');?>
		</td>
	</tr>
	<?php } ?>
</table>