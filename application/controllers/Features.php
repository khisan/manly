<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller {

	public function index()
	{
		$this->load->view('Frontend/templates/header.php');
		$this->load->view('Frontend/cart.php');
		$this->load->view('Frontend/templates/footer.php');
	}
}
