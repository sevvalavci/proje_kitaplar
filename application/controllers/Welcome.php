<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('proje.php');
	
	}
	public function books_pages()
	{
		$this->load->view('includes/books_pages');
	}
	
}