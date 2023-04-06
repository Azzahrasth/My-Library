<?php
 class M_laporan extends CI_Model {
 	public function getAllDataPeminjaman(){
 		
        $this -> db -> select('*');
        $this -> db -> from('peminjaman');
        $this -> db -> join('anggota','peminjaman.id_anggota=anggota.id_anggota');
        $this -> db -> join('buku','peminjaman.id_buku=buku.id_buku');
        return $this -> db ->get()->result();
 	}

    public function filterDataPeminjaman($tgl_awal,$tgl_akhir){
        $this -> db -> select('*');
        $this -> db -> from('peminjaman');
        $this -> db -> join('anggota','peminjaman.id_anggota=anggota.id_anggota');
        $this -> db -> join('buku','peminjaman.id_buku=buku.id_buku');
        $this -> db ->where('peminjaman.tgl_pinjam >=',$tgl_awal);
        $this -> db ->where('peminjaman.tgl_pinjam <=',$tgl_akhir);
        return $this -> db ->get()->result();
    }

    public function getAllDataPengembalian(){
 		
        $this -> db -> select('*');
        $this -> db -> from('pengembalian');
        $this -> db -> join('anggota','pengembalian.id_anggota=anggota.id_anggota');
        $this -> db -> join('buku','pengembalian.id_buku=buku.id_buku');
        return $this -> db ->get()->result();
 	}

    public function filterDataPengembalian($tgl_awal,$tgl_akhir){
        $this -> db -> select('*');
        $this -> db -> from('pengembalian');
        $this -> db -> join('anggota','pengembalian.id_anggota=anggota.id_anggota');
        $this -> db -> join('buku','pengembalian.id_buku=buku.id_buku');
        $this -> db ->where('pengembalian.tgl_kembalikan >=',$tgl_awal);
        $this -> db ->where('pengembalian.tgl_kembalikan <=',$tgl_akhir);
        return $this -> db ->get()->result();
    }
}