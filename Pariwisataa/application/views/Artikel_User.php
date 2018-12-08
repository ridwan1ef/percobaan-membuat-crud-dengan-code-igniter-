
	<h1> Artikel User </h1>
	<?php echo anchor('./Artikel','Artikel'); ?><br />
	<a href="../login/logout"> Logout </a>
	<?php
	$no=1;
	foreach($artikel as $data){
	?>
	<tr>
		<h2>
		<td><?php echo $data['Judul_Artikel'];?></td><br />
		<h4><td><?php echo $data['Penulis'];?></td></h4><br />
		<td><img src="<?php echo base_url().'images/'.$data['Gambar'];?>"width="100"></td><br />
		<td><?php echo $data['Isi'];?></td>
		</h2>
	</tr>
	<?php } ?>