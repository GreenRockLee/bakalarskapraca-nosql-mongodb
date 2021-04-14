<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index(){
		$this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');
		$this->load->view('common/header');
		$this->load->view('common/footer');

	}


}
