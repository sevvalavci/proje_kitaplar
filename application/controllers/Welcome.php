<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('proje.php');
	}
	public function books_pages()
	{
		$this->load->view('includes/books_pages');
	}
	public function bebik()
	{
		$this->load->view('includes/bebik');
	}
	public function all_books()
	{
		$this->load->view("includes/all_books");
	}
	public function contact()
	{
		$this->load->view("includes/contact");
	}

}