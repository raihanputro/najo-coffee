<?php

class Kategori extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->user = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row();    
    }
    
    public function search()
    {
        $search = $_GET['search'];
        
        $data['search'] = $this->db->like('nama_menu',$search,'both')->get('tb_menu')->result();
        $data['user'] = $this->user;
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('search',$data);
        $this->load->view('templates/footer');
    }
}