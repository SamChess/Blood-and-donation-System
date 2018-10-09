<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		//load database libray manually
      	$this->load->database();
	    $this->load->model('main_model');
	}

	public function displayLogin(){
		$this->load->view('login');
	}

    	public function displaySignup(){
		$this->load->view('signup');
		 if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('user_name');
		$e=$this->input->post('email');
		$m=$this->input->post('password');
		$b=$this->input->post('confirm_password');
		$p=$this->input->post('access_level');

	    $this->main_model->saverecords($n,$e,$m);		
		echo "Records Saved Successfully";
	}
  }
}
