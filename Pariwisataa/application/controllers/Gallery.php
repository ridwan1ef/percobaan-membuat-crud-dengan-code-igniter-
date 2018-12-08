<?php
class Gallery extends CI_Controller{
	public function index(){
		$this->load->model('model_Gallery');
		$data['gallery']=$this->model_Gallery->tampil_data_gallery()->result_array();
		$this->load->view('include/header');
		$this->load->view('Gallery_Admin', $data);
		$this->load->view('include/footer');
	}
	public function gallery_user(){
		$this->load->model('model_Gallery');
		$data['objek_wisata']=$this->model_Gallery->tampil_data_gallery()->result_array();
		$this->load->view('include/header');
		$this->load->view('Gallery_User', $data);
		$this->load->view('include/footer');
	}
	public function tambah_data_gallery(){
		$this->load->view('include/header');
		$this->load->view('Tambah_Gallery');
		$this->load->view('include/footer');
	}
	public function simpan_Gallery(){
		$this->load->model('model_Gallery');
		$data['gallery']=$this->model_Gallery->model_Simpan_Gallery();
		redirect('gallery','refresh');
	}
	public function Edit_Gallery($ID_Gallery){
		$this->load->view('include/header');
		$this->load->model('model_Gallery');
		$data['gallery']=$this->model_Gallery->ambil_data_gallery($ID_Gallery)->row_array();
		$this->load->view('Edit_Gallery',$data);
		$this->load->view('include/footer');
	}
	public function Edit_Gallery_proses(){
		$this->load->model('model_Gallery');
		$this->model_Gallery->edit_data_gallery();
		redirect('gallery','refresh');
	}
	public function Hapus_Gallery($ID_Gallery){
		$this->load->model('model_Gallery');
		$this->model_Gallery->Hapus_Gallery_proses($ID_Gallery);
		redirect('gallery','refresh');
	}
}
?>