<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profile extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/profil');
    }
    
    public function profiledata()
    {
        if($this->input->method() == "post"){
            $this->$this->form_validation->set_rules('kadi', 'Kullanıcı adı', 'trim|required');
            $this->$this->form_validation->set_rules('eposta', 'E-posta adresi', 'trim|required');
            
            if($this->$this->form_validation->run() == FALSE){
                echo validation_errors();

            }
            else
            {
                $query =$this->common_model->get([
                'eposta'=>$this->input->post('eposta',true),
                'id !='=>$this->session->userdata('id')], 'uyeler');
                  
                 if($query){
                     echo "E-posta adresi sistemde kayıtlı";
                 
                 }
                 else
                 {
                     $data = array(
                         "kadi" => strip_tags(trim($this->input->post('kadi',true))),
                         "eposta" => strip_tags(trim($this->input->post('eposta',true)))

                     );
                 }

                 $update = $this->common_model->update(['id'=>$this->session->userdata('id')],$data,'uyeler');
                 if($update){
                     echo "Profiliniz güncellendi";

                 }
                 else{
                     echo "Hata oluştu.";
                 }

            }
        }
    }
}
?>
