<?php
 class M_penerbit extends CI_Model {

    public function edit($id){
        $this-> db -> where('id_penerbit', $id);
        return $this->db->get('penerbit')->row_array();
    }

    public function getPenerbit(){
        $data = $this-> db -> get('penerbit');
        return $data -> result();
    }

    public function tambahPenerbit($data){
        $this-> db -> insert('penerbit', $data);
    }

     public function update($id_penerbit, $data){
        $this->db->where('id_penerbit', $id_penerbit);
        $this->db->update('penerbit', $data);
    }

    public function hapus($id){
        $this->db->where('id_penerbit', $id);
        $this->db->delete('penerbit');
    }
 }