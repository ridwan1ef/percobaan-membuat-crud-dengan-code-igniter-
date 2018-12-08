
	<h1> Data Objek Wisata </h1>
	<?php echo anchor('Objek_Wisata/tambah_data_objek','Tambah Objek Wisata'); ?><br />
	<table border>
	<tr>
		<td> No </td>
		<td> ID Objek </td>
		<td> Nama </td>
		<td> Alamat </td>
		<td> Jam Buka </td>
		<td> Jam Tutup </td>
		<td> Keterangan Objek Wisata </td>
		<td> Rating </td>
		<td> Gambar </td>
		<td> Aksi </td>
	</tr>
	<?php
	$no=1;
	foreach($objek_wisata as $data){
	?>
	<tr>
		<td><?php echo$no++;?></td>
		<td><?php echo $data['ID_Objek'];?></td>
		<td><?php echo $data['Nama'];?></td>
		<td><?php echo $data['Alamat'];?></td>
		<td><?php echo $data['Jam_Buka'];?></td>
		<td><?php echo $data['Jam_Tutup'];?></td>
		<td><?php echo $data['Keterangan_Objek_Wisata'];?></td>
		<td><?php echo $data['Rating'];?></td>
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td>
		<td><?php echo anchor('Objek_Wisata/Edit_Objek_Wisata/'.$data['ID_Objek'],'EDIT');?>
			<?php echo anchor('Objek_Wisata/Hapus_Objek_Wisata/'.$data['ID_Objek'],'HAPUS');?>
		</td>
	</tr>
	<?php } ?>
</table>