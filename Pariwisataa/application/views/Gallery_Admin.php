
	<h1> Data Gallery </h1>
	<?php echo anchor('Gallery/tambah_data_gallery','Tambah Gallery'); ?><br />
	<table border>
	<tr>
		<td> No </td>
		<td> ID Gallery </td>
		<td> ID Objek
		<td> Judul Gambar </td>
		<td> Keterangan Gambar </td>
		<td> Gambar </td>
		<td> Aksi </td>
	</tr>
	<?php
	$no=1;
	foreach($gallery as $data){
	?>
	<tr>
		<td><?php echo$no++;?></td>
		<td><?php echo $data['ID_Gallery'];?></td>
		<td><?php echo $data['ID_Objek'];?></td>
		<td><?php echo $data['Judul_Gambar'];?></td>
		<td><?php echo $data['Keterangan_Gambar'];?></td>
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td>
		<td><?php echo anchor('Gallery/Edit_Gallery/'.$data['ID_Gallery'],'EDIT');?>
			<?php echo anchor('Gallery/Hapus_Gallery/'.$data['ID_Gallery'],'HAPUS');?>
		</td>
	</tr>
	<?php } ?>
</table>