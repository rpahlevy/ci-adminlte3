<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errors extends CI_Controller
{

	public function error404()
	{
		$this->output->set_status_header('404');
		$this->load->view('errors/custom/404');
	}
}
