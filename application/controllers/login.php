<?php 

class Login extends CI_Controller {

	// menghubungkan controler login ke model login, supaya tidak perlu menulis load model ke setiap function
	public function __construct(){
		parent::__construct();
		$this -> load -> model('m_login');
	}

	// index nya itu jadi langgsung diarahkan ke v_login
	public function index(){
		$this -> load -> view('v_login');
	}

	public function proses_login(){
		// menampung inputan dari form (username passwoerd), harus sama name di form nya
		$user = $this -> input -> post('username');
		$pass = $this -> input -> post('password');
		// mengirimkan isi var user dan var pass ke mmodel login -> function proses_login
		$this -> m_login -> proses_login($user, $pass);
	}

	// menghapus session yg dibuat ketika lgin, lalu di redirect ke halaman login
	public function logout(){
		$this -> session -> sess_destroy();
		redirect('login');
	}
}

 ?>



