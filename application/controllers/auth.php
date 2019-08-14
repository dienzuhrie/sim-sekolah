<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->model('list_user');
		$data['user']=$this->list_user->get_data();

		$this->load->view('list_user', $data);
	}
	public function dashboard(){
		$this->load->view('dashboard');
	}
}
