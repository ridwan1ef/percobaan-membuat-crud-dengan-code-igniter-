<?php
class Objek_Wisata extends CI_Controller{
	public function index(){
		$this->load->model('model_Objek_Wisata');
		$data['objek_wisata']=$this->model_Objek_Wisata->tampil_data_objek_wisata()->result_array();
		$this->load->view('include/header');
		$this->load->view('Objek_Wisata_Admin', $data);
		$this->load->view('include/footer');
	}
	public function objek_wisata_user(){
		$this->load->model('model_Objek_Wisata');
		$data['objek_wisata']=$this->model_Objek_Wisata->tampil_data_objek_wisata()->result_array();
		$this->load->view('include/header');
		$this->load->view('Objek_Wisata_User', $data);
		$this->load->view('include/footer');
	}
	public function tambah_data_objek(){
		$this->load->view('include/header');
		$this->load->view('Tambah_Objek_Wisata');
		$this->load->view('include/footer');
	}
	public function simpan_Objek_Wisata(){
		$this->load->model('model_Objek_Wisata');
		$data['objek_wisata']=$this->model_Objek_Wisata->model_Simpan_Objek();
		redirect('objek_wisata','refresh');
	}
	public function Edit_Objek_Wisata($ID_Objek){
		$this->load->view('include/header');
		$this->load->model('model_Objek_Wisata');
		$data['objek_wisata']=$this->model_Objek_Wisata->ambil_data_objek_wisata($ID_Objek)->row_array();
		$this->load->view('Edit_Objek_Wisata',$data);
		$this->load->view('include/footer');
	}
	public function Edit_Objek_Wisata_proses(){
		$this->load->model('model_Objek_Wisata');
		$this->model_Objek_Wisata->edit_data_objek_wisata();
		redirect('objek_wisata','refresh');
	}
	public function Hapus_Objek_Wisata($ID_Objek){
		$this->load->model('model_Objek_Wisata');
		$this->model_Objek_Wisata->Hapus_Objek_Wisata_proses($ID_Objek);
		redirect('objek_wisata','refresh');
	}
}
?>