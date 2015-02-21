<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['main_view'] = 'home/index';
		$this->load->view('include/template', $data);
	}
}