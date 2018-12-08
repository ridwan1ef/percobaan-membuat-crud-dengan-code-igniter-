<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Auth extends CI_Controller 
{
	
	public function index()
	{
		$this->load->view('auth/login');
	}
	public function register()
	{
		$this->load->view('auth/register');
	}
	public function reg_action()
	{
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		if ($password != $repassword) {

			echo "password tidak sama";
		}else{

			$data = array(
				'fullname'=>$fullname,
				'username'=>$username,
				'password'=>md5($password));
		$result=$this->model->simpan('users',$data);
		if ($result > 0) {
			echo "Data Users Berhasil Disimpan";
		}else{
			echo "Data Users Gagal Disimpan";
		}
	}
}
}
?>