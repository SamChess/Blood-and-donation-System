<?php
defined("BASEPATH") OR exit('NO direct script access allowed');

class Hospital extends CI_Controller
{
	
	public function index()
	{
		$this->load->view("hospital");
	}
	public function form_validation()
	{
		//echo'ok';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("Name","Name",'required');
		$this->form_validation->set_rules("Contact","Contact",'required');
		$this->form_validation->set_rules("Email","Email",'required');
		$this->form_validation->set_rules("Hospital Code","Hospital Code",'required');

      

		if($this->form_validation->run())
		{
			$this->load->model("hospital_model");
			$data = array(
				"Name" =>$this->input->post("Name"),
				"Email" =>$this->input->post("Email"),
				"Contact" =>$this->input->post("Contact"),
				"Hospital Code" =>$this->input->post("Hospital Code")
			);
			$this->hospital_model->insert_data($data);
			redirect(base_url()."hospital/inserted");

		}
		else
		{
			$this->index();
		}
	}
	public function inserted()
	{
		$this->index();
	}
}