<?php
 class M_peminjaman extends CI_Model {
 	public function id_peminjaman(){	
        $this -> db -> select('RIGHT(peminjaman.id_pm,3) as kode', FALSE);
        $this -> db -> order_by('id_pm', 'DESC');
        $this -> db -> limit(1);
        $query = $this -> db -> get('peminjaman');

 		if($query -> num_rows()> 0){
            $data=$query -> row();
            $kode= intval($data->kode)+1;
        }else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "PM".$kodemax;
        return $kodejadi;
 	
 	}

    public function jumlah_buku($id){
        $this->db->select('jumlah');
        $this->db->from('buku');
        $this-> db -> where('id_buku', $id);
        return $this->db->get()->row_array();
    }

    // join buat dpt nama anggota sama nama buku
    public function getDataPeminjaman(){
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota','peminjaman.id_anggota=anggota.id_anggota');
        $this->db->join('buku','peminjaman.id_buku=buku.id_buku');
        return $this->db->get()->result();
    }

    public function getAnggota(){
        $data = $this-> db -> get('anggota');
        return $data -> result();
    }

    public function getBuku(){
        $data = $this-> db -> get('buku');
        return $data -> result();
    }

    public function tambahPeminjaman($data){
        $this-> db -> insert('peminjaman', $data);
    }

    public function tambahPengembalian($data){
        $this-> db -> insert('pengembalian', $data);
    }

    public function getDataById_pm($id){
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota','peminjaman.id_anggota=anggota.id_anggota');
        $this->db->join('buku','peminjaman.id_buku=buku.id_buku');
        $this->db->where('peminjaman.id_pm', $id);
        return $this->db->get()->row_array();
    }

    public function deletePm($id){
        $this->db->where('id_pm', $id);
        $this->db->delete('peminjaman');
    }
 }

?>