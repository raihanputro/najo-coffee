<?php 

class Dashboard_admin extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }
    
    public function index(){
        $query = $this->db->query("SELECT * FROM tb_invoice WHERE status='Selesai'");
        $data['pendapatan'] = $query->result_array();
        
        $query = $this->db->query("SELECT COUNT(id) as count FROM tb_invoice WHERE status='Pending'");
        $data['belumproses'] = $query->row();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
    
    public function pendapatan() {
        $data['pendapatan'] = $this->db->query("SELECT * FROM tb_invoice WHERE status='Selesai' ")->result_array();
        
        if (@$_GET['dari']) {
            $query = $this->db->query("SELECT * FROM tb_invoice WHERE DATE(tgl_pesan) BETWEEN '$_GET[dari]' AND '$_GET[sampai]' AND status='Selesai' ");
            $data['pendapatan'] = $query->result_array();
        }
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/pendapatan',$data);
        $this->load->view('templates_admin/footer');
    }
}