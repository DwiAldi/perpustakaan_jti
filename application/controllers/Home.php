<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('home_admin');		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */