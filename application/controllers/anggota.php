<?php 
// jadi klw kita klik menu anggota, maka akan diarahkan ke controller anggota, kemudia mengeksekusi function index,
// najh function inti akan mengambil file v_anggota yang ada di dalam folder anggota
class Anggota extends CI_Controller {
	
        public function __construct() {
                parent::__construct();
                // $this -> load -> model('m_anggota');
        }

        public function index(){
                $isi['content']='anggota/v_anggota';
                $isi['judul']='Daftar Data Anggota';
                $isi['data']= $this->m_anggota->getAnggota();
                $this -> load -> view('v_dashboard',$isi);
	}

        public function tambah_anggota(){
                $isi['content']='anggota/form_anggota';
                $isi['judul']='Form Tambah anggota';
                $isi['id_anggota']= $this->m_anggota->id_anggota();
                $this -> load -> view('v_dashboard',$isi);
        }

        public function simpan(){
                $data = array(
                        'id_anggota'    => $this -> input -> post('id_anggota'),
                        'nama_anggota'  => $this -> input -> post('nama_anggota'),
                        'gender'        => $this -> input -> post('gender'),
                        'alamat'        => $this -> input -> post('alamat'),
                        'no_hp'         => $this -> input -> post('no_hp')
                );
                $query  = $this->m_anggota->tambahAnggota($data);
                if ($query = true){
                        $this->session->set_flashdata('info', 'Data berhasil disimpan');
                        redirect('anggota');
                }
        }

        public function edit($id){
                $isi['content']='anggota/edit_anggota';
                $isi['judul']='Form Edit anggota';
                $isi['data']= $this->m_anggota->edit($id);
                $this -> load -> view('v_dashboard',$isi);
        }

        public function update(){
                $id_anggota = $this->input ->post('id_anggota');
                 $data = array(
                        'id_anggota'    => $this -> input -> post('id_anggota'),
                        'nama_anggota'  => $this -> input -> post('nama_anggota'),
                        'gender'        => $this -> input -> post('gender'),
                        'alamat'        => $this -> input -> post('alamat'),
                        'no_hp'         => $this -> input -> post('no_hp')
                );

                $query  = $this->m_anggota->update($id_anggota,  $data);
                if ($query = true){
                        $this->session->set_flashdata('info', 'Data berhasil diupdate');
                        redirect('anggota');
                }

        }
	
        public function hapus($id){
                $query  = $this->m_anggota->hapus($id);
                if ($query = true){
                        $this->session->set_flashdata('info', 'Data berhasil di Hapus');
                        redirect('anggota');
                }

        }
}

 ?>



