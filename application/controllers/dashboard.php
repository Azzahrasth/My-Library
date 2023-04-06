<?php 

class Dashboard extends CI_Controller {
   // ketika mengakses kontroler dashboard yang akan ditampilkan itu function index,
   // function ini akan menampilkan file yg bernama v_dashboard
   public function index(){
        $this -> m_security -> getSecurity(); // mengecek security dulu
        $isi['content']='v_home';
        $isi['judul']='Dashboard';
        $this -> load -> model('m_dashboard');
        
        $isi['anggota']= $this->m_dashboard->countAnggota();
        $isi['buku']= $this->m_dashboard->countBuku();
        $isi['pinjam']= $this->m_dashboard->countPinjam();
        $isi['kembali']= $this->m_dashboard->countKembali();
        $this -> load -> view('v_dashboard',$isi);
    }	
}

 ?>



