

<?php
 class M_login extends CI_Model {
 	public function proses_login($user, $pass){
 		
		$password = md5($pass);
 		// mengecek apakah ada data pada tabel login dimana  username dan password  nya sama dengan inputan / $user dan $passwords
		$user = $this -> db -> where('username', $user);
 		$pass = $this -> db -> where('password', $password);
 		$query = $this -> db -> get('login');

		// bila data nya ada
 		if($query -> num_rows()> 0){
 			foreach ($query -> result() as $row) {
 				$sess = [
 					'id' 		=> $row -> id,
 					'nama' 		=> $row -> nama,
 					'username' 	=> $row -> username,
 					'password' 	=> $row -> password,
 					'level' 	=> $row -> level
 				];
				// taro ke dalam usersession
 				$this -> session -> set_userdata($sess);
 			}
			// redirect ke kontroler dashboard
 			redirect('dashboard');

		// bila data nya tidak ada
 		} else {
			// menampilkan pesan login gagal
 			$this -> session -> set_flashdata('info', '<div class="alert alert-danger" role="alert"><strong>Login Gagal !</strong> Silahkan Masukkan Username dan Password yang benar!</div>');
 			// redirect ke kontroler login
			redirect('login');
 		}
 	}
 }

?>