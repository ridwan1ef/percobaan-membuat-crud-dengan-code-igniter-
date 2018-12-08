
	<h1> Objek Wisata User </h1>
	<?php echo anchor('./Objek_Wisata','Objek Wisata'); ?><br />
	<a href="../login/logout"> Logout </a>
	<?php
	$no=1;
	foreach($objek_wisata as $data){
	?>
	<tr>
		<h2>
		<td><?php echo $data['Nama'];?></td><br />
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td><br />
		</h2>
		<h3>
		<td> Alamat : </td>
		<td><?php echo $data['Alamat'];?></td><br />
		<td> Jam Buka : </td>
		<td><?php echo $data['Jam_Buka'];?></td><br />
		<td> Jam Tutup : </td>
		<td><?php echo $data['Jam_Tutup'];?></td><br />
		<td> Keterangan : </td>
		<td><?php echo $data['Keterangan_Objek_Wisata'];?></td><br />
		<td> Rating </td>
		<td><?php echo $data['Rating'];?></td>
	</tr>
	<?php } ?>