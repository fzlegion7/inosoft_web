<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inosoft extends CI_Controller {
	public function index()
	{
		$this->load->view('Inosoft/home');
        $this->load->helper('url');
	}

}
