<?php
class Artikel extends CI_Controller{
	public function index(){
		$this->load->model('model_Artikel');
		$data['artikel']=$this->model_Artikel->tampil_data_artikel()->result_array();
		$this->load->view('include/header');
		$this->load->view('Artikel_Admin', $data);
		$this->load->view('include/footer');
	}
	public function artikel_user(){
		$this->load->model('model_Artikel');
		$data['artikel']=$this->model_Artikel->tampil_data_artikel()->result_array();
		$this->load->view('include/header');
		$this->load->view('Artikel_User', $data);
		$this->load->view('include/footer');
	}
	public function tambah_data_artikel(){
		$this->load->view('include/header');
		$this->load->view('Tambah_Artikel');
		$this->load->view('include/footer');
	}
	public function simpan_Artikel(){
		$this->load->model('model_Artikel');
		$data['artikel']=$this->model_Artikel->model_Simpan_Artikel();
		redirect('artikel','refresh');
	}
	public function Edit_Artikel($ID_Artikel){
		$this->load->view('include/header');
		$this->load->model('model_Artikel');
		$data['artikel']=$this->model_Artikel->ambil_data_artikel($ID_Artikel)->row_array();
		$this->load->view('Edit_Artikel',$data);
		$this->load->view('include/footer');
	}
	public function Edit_Artikel_proses(){
		$this->load->model('model_Artikel');
		$this->model_Artikel->edit_data_artikel();
		redirect('artikel','refresh');
	}
	public function Hapus_Artikel($ID_Artikel){
		$this->load->model('model_Artikel');
		$this->model_Artikel->Hapus_Artikel_proses($ID_Artikel);
		redirect('artikel','refresh');
	}
}
?>