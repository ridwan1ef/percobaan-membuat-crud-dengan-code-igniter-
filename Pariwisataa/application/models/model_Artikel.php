 <?php
class model_Artikel extends CI_Model{
	public function tampil_data_artikel(){
		$artikel=$this->db->get('artikel');
		return $artikel;
	}
	public function model_Simpan_Artikel(){
		$config['upload_path']='./images/';
		$config['max_size']=10240;
		$config['allowed_types']='jpg|png|gif|jpeg|JPG';
		$this->upload->initialize($config);
		if($this->upload->do_upload('Gambar')){
			$Gambar=$this->upload->data();
			$data=$Gambar['file_name'];
		$artikel=array(
			'ID_Artikel'  	=>$this->input->POST('ID_Artikel'),
			'Judul_Artikel' =>$this->input->POST('Judul_Artikel'),
			'Isi'			=>$this->input->POST('Isi'),
			'Penulis'		=>$this->input->POST('Penulis'),
			'Gambar'		=>$data
		);
		$this->db->insert('artikel',$artikel);
		}
	}
	public function ambil_data_artikel($ID_Artikel){
		$this->db->where('ID_Artikel', $ID_Artikel);
		$data=$this->db->get('artikel');
		return $data;
	}
	public function edit_data_artikel(){
		$ID_Artikel=$this->input->POST('ID_Artikel');
		$foto_lama=$this->input->POST('foto_lama');
		if(empty ($_FILES['Gambar']['name'])){
		$artikel=array(
			'ID_Artikel'  	=>$this->input->POST('ID_Artikel'),
			'Judul_Artikel' =>$this->input->POST('Judul_Artikel'),
			'Isi'			=>$this->input->POST('Isi'),
			'Penulis'		=>$this->input->POST('Penulis'),
			'Gambar'		=>$foto_lama
		);
		} else{
			$config['upload_path']='./images/';
			$config['max_size']=10240;
			$config['allowed_types']='jpg|png|gif|jpeg|JPG';
			$this->upload->initialize($config);
			if($this->upload->do_upload('Gambar')){
				$Gambar=$this->upload->data();
				$data_gambar=$Gambar['file_name'];
				$artikel=array(
					'ID_Artikel'  	=>$this->input->POST('ID_Artikel'),
					'Judul_Artikel' =>$this->input->POST('Judul_Artikel'),
					'Isi'			=>$this->input->POST('Isi'),
					'Penulis'		=>$this->input->POST('Penulis'),
					'Gambar'		=>$data_gambar
				);
			}
		}
		$this->db->where('ID_Artikel',$ID_Artikel);
		$this->db->update('artikel',$artikel);
	}
	public function Hapus_Artikel_proses($ID_Artikel){
		$this->db->where('ID_Artikel',$ID_Artikel);
		$this->db->delete('artikel');
	}
}
?>