
	<h1> Gallery User </h1>
	<?php echo anchor('./Gallery','Gallery'); ?><br />
	<a href="../login/logout"> Logout </a>
	<?php
	$no=1;
	foreach($gallery as $data){
	?>
	<tr>
		<h3>
		<td><?php echo $data['Judul_Gambar'];?></td><br />
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td><br />
		</h3>
		<h5><td> Keterangan : </td>
		<td><?php echo $data['Keterangan_Gambar'];?></td>
		</h5>
	</tr>
	<?php } ?>