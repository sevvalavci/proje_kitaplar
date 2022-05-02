<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view("includes/giris");
    }
    public function logindata()
    {
        if ($this->input->method() == "post") {
            $this->form_validation->set_rules('sifre', 'Şifreniz', 'trim|required');
            $this->form_validation->set_rules('eposta', 'E-posta adresi', 'trim|required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                echo validation_errors();
            } else {
            }
            $query = $this->common_model->get([
                'sifre' => sha1(md5(strip_tags(trim($this->input->post('sifre', true))))),
                'eposta' => strip_tags(trim($this->input->post('eposta', true)))
            ], 'uyeler');

            if ($query) {
                $this->session->set_userdata([
                    'oturum' => true,
                    'id'     => $query->id,
                    'kadi'   => $query->kadi,
                    'eposta' => $query->eposta
                ]);
                redirect(base_url('profile'));
            } else {
                echo "Bilgiler Yanlış";
            }
        }
    }
}