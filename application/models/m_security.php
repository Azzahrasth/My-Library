<?php
class M_security extends CI_Model {

    public function getSecurity()
    {
        $username =  $this -> session->userdata('username');
    //  jadi mnegecek username yg dihasilkan dri session ketika kita login, 
    // jika username nya kosong, maka session di hapus kemudian diarahkan ke controller login, untuk login terlebih dahulu
 		if(empty($username)){
                $this -> session -> sess_destroy();
                redirect('login');
            }
        }
    }
?>