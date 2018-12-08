<?php
class model_Gallery extends CI_Model{
	public function tampil_data_gallery(){
		$gallery=$this->db->get('gallery');
		return $gallery;
	}
	public function model_Simpan_Gallery(){
		$config['upload_path']='./images/';
		$config['max_size']=10240;
		$config['allowed_types']='jpg|png|gif|jpeg|JPG';
		$this->upload->initialize($config);
		if($this->upload->do_upload('Gambar')){
			$Gambar=$this->upload->data();
			$data=$Gambar['file_name'];
		$gallery=array(
			'ID_Gallery'  		=>$this->input->POST('ID_Gallery'),
			'ID_Objek'  		=>$this->input->POST('ID_Objek'),
			'Judul_Gambar'		=>$this->input->POST('Judul_Gambar'),
			'Keterangan_Gambar'	=>$this->input->POST('Keterangan_Gambar'),
			'Gambar'			=>$data
		);
		$this->db->insert('gallery',$gallery);
		}
	}
	public function ambil_data_gallery($ID_Gallery){
		$this->db->where('ID_Gallery', $ID_Gallery);
		$data=$this->db->get('gallery');
		return $data;
	}
	public function edit_data_gallery(){
		$ID_Gallery=$this->input->POST('ID_Gallery');
		$foto_lama=$this->input->POST('foto_lama');
		if(empty ($_FILES['Gambar']['name'])){
		$gallery=array(
			'ID_Gallery'  		=>$this->input->POST('ID_Gallery'),
			'ID_Objek'  		=>$this->input->POST('ID_Objek'),
			'Judul_Gambar'		=>$this->input->POST('Judul_Gambar'),
			'Keterangan_Gambar'	=>$this->input->POST('Keterangan_Gambar'),
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
				$gallery=array(
					'ID_Gallery'  		=>$this->input->POST('ID_Gallery'),
					'ID_Objek'  		=>$this->input->POST('ID_Objek'),
					'Judul_Gambar'		=>$this->input->POST('Judul_Gambar'),
					'Keterangan_Gambar'	=>$this->input->POST('Keterangan_Gambar'),
					'Gambar'			=>$data_gambar
				);
			}
		}
		$this->db->where('ID_Gallery',$ID_Gallery);
		$this->db->update('gallery',$gallery);
	}
	public function Hapus_Gallery_proses($ID_Gallery){
		$this->db->where('ID_Gallery',$ID_Gallery);
		$this->db->delete('gallery');
	}
}
?>