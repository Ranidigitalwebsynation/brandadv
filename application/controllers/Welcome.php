<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data["file"] = "index";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function about()
	{
		$data = array();
		$data["file"] = "about";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function contact()
	{
		$data = array();
		$data["file"] = "contact";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function blog()
	{
		$data = array();
		$data["file"] = "blog";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function blog_details()
	{
		$data = array();
		$data["file"] = "blog-details";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function event()
	{
		$data = array();
		$data["file"] = "event";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function event_details()
	{
		$data = array();
		$data["file"] = "event-details";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function gallery()
	{
		$data = array();
		$data["file"] = "gallery";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function privacy_policy()
	{
		$data = array();
		$data["file"] = "privacy-policy";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_company()
	{
		$data = array();
		$data["file"] = "our-company";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_director()
	{
		$data = array();
		$data["file"] = "our-director";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_advisors()
	{
		$data = array();
		$data["file"] = "our-advisors";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_motto()
	{
		$data = array();
		$data["file"] = "our-motto";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_core_value()
	{
		$data = array();
		$data["file"] = "our-core-value";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_goal()
	{
		$data = array();
		$data["file"] = "our-goal";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_vision()
	{
		$data = array();
		$data["file"] = "our-vision";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function our_mission()
	{
		$data = array();
		$data["file"] = "our-mission";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function report()
	{
		$data = array();
		$data["file"] = "report";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function public_policy_studies()
	{
		$data = array();
		$data["file"] = "public-policy-studies";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
}
