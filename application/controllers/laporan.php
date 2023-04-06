<?php

class Laporan extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this -> load -> model('m_laporan');
        $this -> load ->library('pdf_report');
    }

    public function peminjaman() {
        $tgl_awal=$this->input->post('tgl_awal');
        $tgl_akhir=$this->input->post('tgl_akhir');
        $this->session->set_userdata('tanggal_awal',$tgl_awal);
        $this->session->set_userdata('tanggal_akhir',$tgl_akhir);

        // jika tidak ada inputan tanggal awal/ akhir maka perlihatkan semua data peminjaman
        if (empty($tgl_awal)||empty($tgl_akhir)) {
            $isi['content']='laporan/v_peminjaman';
            $isi['judul'] = 'Laporan Peminjaman';
            $isi['data'] = $this->m_laporan->getAllDataPeminjaman();
        }else {
            $isi['content']='laporan/v_peminjaman';
            $isi['judul'] = 'Laporan Peminjaman';
            $isi['data'] = $this->m_laporan->filterDataPeminjaman($tgl_awal,$tgl_akhir);
        }
       $this ->load->view('v_dashboard',$isi);
    }

     public function pdf_peminjaman() {
            if (empty($this->session->userdata('tanggal_awal'))||empty($this->session->userdata('tanggal_akhir'))) {
              $isi['data'] = $this->m_laporan->getAllDataPeminjaman();
              $this ->load->view('laporan/pdf_peminjaman',$isi);
            }else {
                $isi['data'] = $this->m_laporan->filterDataPeminjaman(($this->session->userdata('tanggal_awal')),$this->session->userdata('tanggal_akhir'));
                $this ->load->view('laporan/pdf_peminjaman',$isi);
            }
    }

    public function pengembalian() {
        $tgl_awal=$this->input->post('tgl_awal');
        $tgl_akhir=$this->input->post('tgl_akhir');
        $this->session->set_userdata('tanggal_awal',$tgl_awal);
        $this->session->set_userdata('tanggal_akhir',$tgl_akhir);

        // jika tidak ada inputan tanggal awal/ akhir maka perlihatkan semua data pengembalian
        if (empty($tgl_awal)||empty($tgl_akhir)) {
            $isi['content']='laporan/v_pengembalian';
            $isi['judul'] = 'Laporan Pengembalian';
            $isi['data'] = $this->m_laporan->getAllDataPengembalian();
        }else {
            $isi['content']='laporan/v_pengembalian';
            $isi['judul'] = 'Laporan Pengembalian';
            $isi['data'] = $this->m_laporan->filterDataPengembalian($tgl_awal,$tgl_akhir);
        }
       $this ->load->view('v_dashboard',$isi);
    }

     public function pdf_pengembalian() {
            if (empty($this->session->userdata('tanggal_awal'))||empty($this->session->userdata('tanggal_akhir'))) {
              $isi['data'] = $this->m_laporan->getAllDataPengembalian();
              $this ->load->view('laporan/pdf_pengembalian',$isi);
            }else {
                $isi['data'] = $this->m_laporan->filterDataPengembalian(($this->session->userdata('tanggal_awal')),$this->session->userdata('tanggal_akhir'));
                $this ->load->view('laporan/pdf_pengembalian',$isi);
            }
    }
    
}
