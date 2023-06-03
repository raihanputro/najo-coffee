<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
    {
        // $data['menu'] = $this->Model_menu->tampil_data()->result();
        $data['menu'] = $this->Model_menu->terlaris();
        $data['user'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row();
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $data['slider'] = $this->db->get('tb_slider')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
