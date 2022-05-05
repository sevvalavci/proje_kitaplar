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
	public function kayitol()
	{
		$this->load->view("includes/kayitol");
	}
	public function giris()
	{
		$this->load->view("includes/giris");
	}
	public function profil()
	{
		$this->load->view("includes/profil");
	}

	public function registerdata()
	{
		if ($this->input->method() == "post") {
			$this->form_validation->set_rules('kadi', 'Kullanıcı adı', 'trim|required');
			$this->form_validation->set_rules('sifre', 'Şifreniz', 'trim|required');
			$this->form_validation->set_rules('eposta', 'E-posta adresi', 'trim|required|is_unique[uyeler.eposta]|valid_email');



			if ($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				$data = array(
					"kadi" => strip_tags(trim($this->input->post('kadi', true))),
					"eposta" => strip_tags(trim($this->input->post('eposta', true))),
					"sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre', true))))),
				);
				$ekle = $this->common_model->addata('uyeler', $data);
				if ($ekle) {
					redirect(base_url("/welcome/kayitol?status=true"));
				} else {
					redirect(base_url("/welcome/kayitol?status=false"));
				}
			}
		}
	}
}