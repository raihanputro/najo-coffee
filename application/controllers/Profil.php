<?php

class Profil extends CI_Controller {
	public function index()
    {
        $data['user'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row();
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('tentang');
        $this->load->view('templates/footerPage');
    }
}