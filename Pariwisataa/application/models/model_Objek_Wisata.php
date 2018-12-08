<?php
class model_Objek_Wisata extends CI_Model{
	public function tampil_data_objek_wisata(){
		$objek_wisata=$this->db->get('objek_wisata');
		return $objek_wisata;
	}
	public function model_Simpan_Objek(){
		$config['upload_path']='./images/';
		$config['max_size']=10240;
		$config['allowed_types']='jpg|png|gif|jpeg|JPG';
		$this->upload->initialize($config);
		if($this->upload->do_upload('Gambar')){
			$Gambar=$this->upload->data();
			$data=$Gambar['file_name'];
		$objek_wisata=array(
			'ID_Objek'  				=>$this->input->POST('ID_Objek'),
			'Nama' 						=>$this->input->POST('Nama'),
			'Alamat'					=>$this->input->POST('Alamat'),
			'Jam_Buka'					=>$this->input->POST('Jam_Buka'),
			'Jam_Tutup'					=>$this->input->POST('Jam_Tutup'),
			'Keterangan_Objek_Wisata'	=>$this->input->POST('Keterangan_Objek_Wisata'),
			'Rating'					=>$this->input->POST('rating'),
			'Gambar'					=>$data
		);
		$this->db->insert('objek_wisata',$objek_wisata);
		}
	}
	public function ambil_data_objek_wisata($ID_Objek){
		$this->db->where('ID_Objek', $ID_Objek);
		$data=$this->db->get('objek_wisata');
		return $data;
	} 
	public function edit_data_objek_wisata(){
		$ID_Objek=$this->input->POST('ID_Objek');
		$foto_lama=$this->input->POST('foto_lama');
		if(empty ($_FILES['Gambar']['name'])){
		$objek_wisata=array(
			'ID_Objek'  				=>$this->input->POST('ID_Objek'),
			'Nama' 						=>$this->input->POST('Nama'),
			'Alamat'					=>$this->input->POST('Alamat'),
			'Jam_Buka'					=>$this->input->POST('Jam_Buka'),
			'Jam_Tutup'					=>$this->input->POST('Jam_Tutup'),
			'Keterangan_Objek_Wisata'	=>$this->input->POST('Keterangan_Objek_Wisata'),
			'Rating'					=>$this->input->POST('rating'),
			'Gambar'			=>$foto_lama
		);
		} else{
			$config['upload_path']='./images/';
			$config['max_size']=10240;
			$config['allowed_types']='jpg|png|gif|jpeg|JPG';
			$this->upload->initialize($config);
			if($this->upload->do_upload('Gambar')){
				$Gambar=$this->upload->data();
				$data_gambar=$Gambar['file_name'];
				$objek_wisata=array(
					'ID_Objek'  				=>$this->input->POST('ID_Objek'),
					'Nama' 						=>$this->input->POST('Nama'),
					'Alamat'					=>$this->input->POST('Alamat'),
					'Jam_Buka'					=>$this->input->POST('Jam_Buka'),
					'Jam_Tutup'					=>$this->input->POST('Jam_Tutup'),
					'Keterangan_Objek_Wisata'	=>$this->input->POST('Keterangan_Objek_Wisata'),
					'Rating'					=>$this->input->POST('rating'),
					'Gambar'					=>$data_gambar
				);
			}
		}
		$this->db->where('ID_Objek',$ID_Objek);
		$this->db->update('objek_wisata',$objek_wisata);
	}
	public function Hapus_Objek_Wisata_proses($ID_Objek){
		$this->db->where('ID_Objek',$ID_Objek);
		$this->db->delete('objek_wisata');
	}
}
?>