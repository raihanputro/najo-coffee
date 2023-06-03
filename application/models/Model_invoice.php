<?php 

class Model_invoice extends CI_Model{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = $this->input->post();
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $kecamatan = explode('|',$data['kecamatan']);
        
        $invoice = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'hp' => $data['hp'],
            'ekspedisi' => $data['ekspedisi'],
            'metode' => $data['metode'],
            'subtotal' => $data['subtotal'],
            'kecamatan' => $kecamatan[0],
            'ongkir' => $kecamatan[1],
            'bukti' => '',
            'user_id' => $this->session->userdata('userid'),
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H') + 1, date('i'), date('s'), date('m'), date('d') , date('Y')))
        );

        $this->db->insert('tb_invoice', $invoice);
        $id_invoice= $this->db->insert_id();

        foreach($this->cart->contents() as $item){
            $data = array(
                'id_invoice' => $id_invoice,
                'id_menu' => $item['id'],
                'nama_menu' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            );

            $this->db->insert('tb_pesanan',$data);
        }

        return [
            'status' => true,
            'id' => $id_invoice
        ];
    }

    public function tampil_data(){
        $this->db->from('tb_invoice');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}