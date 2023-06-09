<?php  

class Invoice extends CI_Controller{
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
    
    public function index()
    {
        // $data['pesanan'] = $this->db->get_where('tb_invoice',['user_id'=>$this->session->userdata('userid')])->result();
        $data['invoice'] = $this->Model_invoice->tampil_data();
        // $data['invoice'] = $this->db->get('tb_invoice');
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
    }
    
    public function updatestatus($id) {
        $data = $this->input->post();
        $this->db->set('status',$data['status']);
        $this->db->where('id',$id);
        $this->db->update('tb_invoice');
        
        $pesanan = $this->db->get_where('tb_pesanan',['id_invoice'=>$id])->result();
        
        if ($data['status'] == 'Selesai') {
            foreach($pesanan as $item) {
                $this->db->set('terjual', 'terjual+'.$item->jumlah, FALSE);
                $this->db->where('id_menu',$item->id_menu);
                $this->db->update('tb_menu');
            }
        }
        
        redirect('admin/invoice/detail/'.$id);
    }
}