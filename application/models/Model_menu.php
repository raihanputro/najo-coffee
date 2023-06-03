<?php 

class Model_menu extends CI_Model{
    public function tampil_data(){
        return $this->db->query('SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id');
    }

    public function terlaris() {
        $this->db->from('tb_menu'); 
        $this->db->order_by('terjual', 'desc');
        $this->db->limit('5');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function tambah_menu($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_menu($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function find($id){
        $result = $this->db->where('id_menu', $id)->limit(1)->get('tb_menu');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_mnu($id_menu)
    {
        $result = $this->db->query("SELECT A.*,B.nama as kategori FROM tb_menu A LEFT JOIN tb_kategori B ON A.kategori_id=B.id WHERE id_menu=$id_menu"); // ('id_menu', $id_menu)->get('tb_menu');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}