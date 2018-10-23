<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Testss extends CI_controller
{
	

	public function index()
	{
		$this->load->view('testss');
	}
    public function form_validation()
    {
    	//echo 'OK';
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules("Name","Name",'required');
    	$this->form_validation->set_rules("Email","Email",'required');
        $this->form_validation->set_rules("Telephone","Telephone",'required');
        $this->form_validation->set_rules("Blood Type","Blood Type&RH.Type",'required');
        $this->form_validation->set_rules("Gender","Gender",'required');
        $this->form_validation->set_rules("County","County",'required');
        $this->form_validation->set_rules("Town","Town",'required');
        $this->form_validation->set_rules("Address","Address",'required');
        $this->form_validation->set_rules("Birth","Date of Birth",'required');
        $this->form_validation->set_rules("Donation","Previous Blood Donation Date",'required');
        $this->form_validation->set_rules("Reminder","Prefered Reminder Method",'required');

    if($this->form_validation->run())
        {
            $this->load->model("testss_model");
                $data = $this->testss_model->
            $data = array(
                "Name" =>$this->input->post("Name"),
                "Email" =>$this->input->post("Email"),
                "Telephone" =>$this->input->post("Telephone"),
                "Blood Type" =>$this->input->post("Blood Type"),
                "Gender" =>$this->input->post("Gender"),
                "County" =>$this->input->post("County"),
                "Town" =>$this->input->post("Town"),
                "Address" =>$this->input->post("Address"),
                "Birth" =>$this->input->post("Date of Birth"),
                "Donation" =>$this->input->post("Last Donation"),
                "Reminder" =>$this->input->post("Reminder Method")
            );
            $this->you_model->insert_data($data);
            redirect(base_url()."testss/inserted");

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