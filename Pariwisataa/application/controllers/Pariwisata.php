<?php
class Pariwisata extends Ci_Controller{
	public function index(){
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');

	}
}