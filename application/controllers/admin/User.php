<?php  
ob_start();
class User extends CI_Controller
{
    
	public function index()
	{
	    $data['user'] = $this->db->query("SELECT * FROM tb_user")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/user',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_user()
    {
		$data['user'] = $this->db->query("SELECT * FROM tb_user")->result();
        $nama     = $this->input->post('nama');
        $username    = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat          = $this->input->post('alamat');
        $hp           = $this->input->post('hp');
        $kecamatan           = $this->input->post('kecamatan');
		$role_id = $this->input->post('role');
        $foto         = $_FILES['foto']['name'];
        if ($foto =''){}else{
            $config ['upload_path'] = './uploads/foto/';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Foto Gagal di Upload!";
            }else {
                $foto=$this->upload->data('file_name');
            }
        }
        $data = array(
            'nama'      => $nama,
            'username'    => $username,
            'password'      => $password,
            'alamat'         => $alamat,
            'hp'          => $hp,
            'kecamatan'          => $kecamatan,
            'role_id'          => $role_id,
            'foto'        => $foto
        );

        $this->Model_user->tambah_user($data, 'tb_user');
        redirect('admin/user/index');
    }

	public function edit_user($id)
    {
        $where = array ('id' => $id);
        $data['user'] = $this->Model_user->edit_user($where, 'tb_user')->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates_admin/footer');
    }

	public function update($id)
    {
        $data = $this->input->post();
        $nama     = $this->input->post('nama');
        $username    = $this->input->post('username');
        $password       = $this->input->post('password');
        $alamat          = $this->input->post('alamat');
        $hp           = $this->input->post('hp');
        $kecamatan           = $this->input->post('kecamatan');
		$role_id = $this->input->post('role');
        $foto         = $_FILES['foto']['name'];
        $foto_old = $data['foto_old'];
        unset($data['foto_old']);
        
        if ($foto==''){$foto = $foto_old;}else{
            $config ['upload_path'] = './uploads/foto/';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Foto Gagal di upload!";
            }else {
                $foto=$this->upload->data('file_name');
            }
        }
        
        $data = array(
            'nama'      => $nama,
            'username'    => $username,
            'password'      => $password,
            'alamat'         => $alamat,
            'hp'          => $hp,
            'kecamatan'          => $kecamatan,
            'role_id'          => $role_id,
            'foto'        => $foto
        );
        
        $where = array('id' => $id);
        
        $this->Model_user->update_user($where,$data,'tb_user');
        redirect('admin/user/index');
    }

	public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Model_user->hapus_user($where,'tb_user');
        redirect('admin/user/index');
    }
}
?>