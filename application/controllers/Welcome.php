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
	public function opinion_and_image_building_campaigns()
	{
		$data = array();
		$data["file"] = "opinion-and-image-building-campaigns";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function organizational_behavior_and_management_research()
	{
		$data = array();
		$data["file"] = "organizational-behavior-and-management-research";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function product_evaluation_brand_studies_assessment_and_analysis()
	{
		$data = array();
		$data["file"] = "product-evaluation-brand-studies-assessment-and-analysis";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function management_development_training_programmes()
	{
		$data = array();
		$data["file"] = "management-development-training-programmes";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function strategy_development_management_workshops()
	{
		$data = array();
		$data["file"] = "strategy-development-management-workshops";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function brand_building_advocacies_perception_management_meetings()
	{
		$data = array();
		$data["file"] = "brand-building-advocacies-perception-management-meetings";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function customer_care()
	{
		$data = array();
		$data["file"] = "customer-care";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
	public function report_details()
	{
		$data = array();
		$data["file"] = "report-details";
		$data["title"] = "Tittle";
		$this->load->view('include/template', $data);
	}
}
