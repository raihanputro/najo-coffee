<?php 

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
        
        $this->user = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row();
    }

    public function tambah_ke_keranjang($id)
    {
        $menu = $this->Model_menu->find($id);

        $data = array(
            'id'      => $menu->id_menu,
            'qty'     => $_POST['qty'],
            'price'   => $menu->harga,
            'name'    => $menu->nama_menu
        );

        $this->cart->insert($data);
        redirect('welcome');
    }
    
    public function detail_keranjang()
    {
        $data['user'] = $this->user;
        $user_id = $this->session->userdata('userid');
        
        $data['wishlist'] = $this->db->query("SELECT A.* FROM tb_menu A INNER JOIN tb_favorite B ON A.id_menu=B.id_menu WHERE B.user_id=$user_id")->result();
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('keranjang',$data);
        $this->load->view('templates/footerPage');
    }

    public function tentang()
    {
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('tentang');
        $this->load->view('templates/footerPage');
    }
    
    
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome/index');
    }
    
    public function update_item($rowid)
    {
        $data = [
            'rowid' => $rowid,
            'qty' => $_GET['qty']
        ];
        $this->cart->update($data);
        redirect('dashboard/detail_keranjang');
    }
    
    public function pembayaran()
    {
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('pembayaran');
        $this->load->view('templates/footerPage',$data);
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Model_invoice->index();
        $post = $this->input->post();
        if($is_processed['status']){
            $this->cart->destroy();
            
            $data['metode'] = $post['metode'];
            $data['id'] = $is_processed['id'];
            $data['user'] = $this->user;
            $data['kategori'] = $this->db->get('tb_kategori')->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('proses_pesanan',$data);
            $this->load->view('templates/footerPage');
        }else{
            echo "Maaf pesanan anda gagal diproses!";
        }
    }

    public function upload_bukti($id) {
        $data['id'] = $id;
        $data['from'] = 'upload';
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $data['invoice'] = $this->db->get_where('tb_invoice',['id'=>$id])->row();
        $data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id);
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('proses_pesanan',$data);
        $this->load->view('templates/footerPage');
    }

    public function detail($id_menu)
    {
        $data['menu'] = $this->Model_menu->detail_mnu($id_menu);
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $user_id = $this->session->userdata('userid');
        
        $data['wishlist'] = $this->db->get_where('tb_favorite',['user_id'=>$user_id,'id_menu'=>$id_menu])->row();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('detail_menu',$data);
        $this->load->view('templates/footerPage');
    }
    
    public function upload($id) {
        $config['upload_path']          = './uploads/bukti/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
 
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('file')) 
        {
            $error = $this->upload->display_errors();
            var_dump($error);
        
        }
        else 
        {
            $filename = $this->upload->data();
            $filename = $filename['file_name'];
            
            $this->db->set('bukti',$filename);
            $this->db->where('id',$id);
            $this->db->update('tb_invoice');
            
            redirect('dashboard/berhasilproses');
        }
    }
    
    public function berhasilproses() {
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('berhasil_proses');
        $this->load->view('templates/footerPage');
    }
    
    public function profil(){
        $username = $this->session->userdata('username');
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = $this->input->post();
            
            $gambar         = $_FILES['foto']['name'];
            
            if ($data['password'] == '') {
                unset($data['password']);
            }
            $gambarold = $data['gambarold'];
            unset($data['gambarold']);
            
            
            if ($gambar==''){$gambar = $gambarold;}else{
                $config ['upload_path'] = './uploads/foto/';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';
    
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('foto')){
                    echo "Gambar Gagal di Upload!";
                }else {
                    $gambar=$this->upload->data('file_name');
                }
            }
            
            $data['foto'] = $gambar;
            
            $this->db->where('username', $username);
            $this->db->update('tb_user', $data);
            redirect('dashboard/profil');
        } else {
            $data['profil'] = $this->db->get_where('tb_user',['username'=>$username])->row();
            $data['user'] = $this->user;
            $data['kategori'] = $this->db->get('tb_kategori')->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('profil',$data);
            $this->load->view('templates/footerPage');
        }
    }
    
    public function pesanan() {
        $data['pesanan'] = $this->db->get_where('tb_invoice',['user_id'=>$this->session->userdata('userid')])->result();
        $data['user'] = $this->user;
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('pesanan',$data);
        $this->load->view('templates/footerPage');
    }
    
 
    
    public function tambah_wishlist($id_menu) {
        $user_id = $this->session->userdata('userid');
        $status = $_POST['status'];
        
        if ($status=='add') {
            $insert = [
                'user_id' => $user_id,
                'id_menu' => $id_menu
            ];
            
            $this->db->insert('tb_favorite',$insert);
        } else {
            $this->db->where('user_id',$user_id);
            $this->db->where('id_menu',$id_menu);
            $this->db->delete('tb_favorite');
        }
        
        redirect('dashboard/detail/'.$id_menu);
    }
    
    public function kategori($id) {
        $search = @$_GET['cari'];
        
        // $query = "SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id";
        
        // if ($search != "") {
        //     $query = "SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id WHERE A.nama_menu like '%$search%'";
        // }
        
        $data['kategori'] = $this->db->get('tb_kategori')->result();
        
        $this->db->where('kategori_id',$id);
        if ($search != "") {
            $this->db->where("nama_menu like '%$search%'");
        }
        $data['menu'] = $this->db->get('tb_menu')->result();
        
        $data['user'] = $this->user;
        $data['slider'] = $this->db->get('tb_slider')->result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('kategori',$data);
        $this->load->view('templates/footerPage');
    }

    public function menu() {

        $search = @$_GET['cari'];
        
        $query = "SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id";
        
        if ($search != "") {
            $query = "SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id WHERE A.nama_menu like '%$search%'";
        }
        
        // $data['menu'] = $this->Model_menu->tampil_data()->result();
        $data['menu'] = $this->db->query($query)->result();
        $this->db->query('SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id');
        $data['user'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row();
        $kategori = $this->db->get('tb_kategori')->result();
        
        foreach($kategori as $idx => $item) {
            if ($search != "") {
                $this->db->like('nama_menu', $search);
            }
            
            $d = $this->db->where('kategori_id',$item->id)->get('tb_menu')->result();
            $kategori[$idx]->menu = $d;
        }
        
        $data['kategori'] = $kategori;
        
        $data['slider'] = $this->db->get('tb_slider')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('semua_menu',$data);
        $this->load->view('templates/footerPage');
    }
    
} 