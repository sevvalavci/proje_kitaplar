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
	public function girisdata()
	{
		if ($this->input->method() == "post") {
			$kadi = $this->input->post('kadi', true);
			$sifre = $this->input->post('sifre', true);
			$sifrele = sha1(md5($sifre));

			if (!$kadi || !$sifre) {
				echo "Boş alan bırakmayınız";
			} else {
				$data = array(
					'kadi' => $kadi,
					'sifre' => $sifrele
				);

				$giris = $this->common_model->get($data, 'uyeler');
				if ($giris) {
					$this->session->set_userdata([
						'kadi' => $giris->kadi,
						'id' => $giris->id
					]);
					$veriler = array(
						'uyeid' => $giris->id,
						'ip' => $this->input->ip_address(),
						'tarih' => date('Y-m-d H:i:s'),
						'aciklama' => 'sisteme giriş yapıldı'
					);
					$this->common_model->insert('loglar', $veriler);
					redirect(base_url('welcome/profil'));
				} else {
					echo "Kullanıcı adı veya şifre hatalı";
				}
			}
		}
	}
}