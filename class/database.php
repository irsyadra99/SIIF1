<?php 
class database{
 
	var $host = "remotemysql.com";
	var $uname = "kZXrSwhZy7";
	var $pass = "SLjmGMemEO";
	var $db = "kZXrSwhZy7";
	function __construct(){
		//mysql_connect($this->host, $this->uname, $this->pass);
		//mysql_select_db($this->db);
    }
    
    function tampil_data(){
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        $data = $mysqli->query("SELECT * FROM Inventaris");
        while($d = mysqli_fetch_array($data, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    public function check_login($username, $password)
    {
        $mysqli = mysqli_connect("remotemysql.com", "kZXrSwhZy7", "SLjmGMemEO", "kZXrSwhZy7");
        $result = $mysqli->query("SELECT * from mahasiswa WHERE username = '$username' AND password = '$password'");
        $cek = mysqli_num_rows($result);
        if($cek > 0){
 
            $data = mysqli_fetch_assoc($result);
         
            // cek jika user login sebagai admin
            if($data['Tipe']=='Akademisi'){
         
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['Tipe'] = "Akademisi";
                // alihkan ke halaman dashboard admin
                header("location: form/form_lapor.php");
         
            // cek jika user login sebagai pegawai
            }else if($data['Tipe']=="Pengurus"){
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['Tipe'] = "Pengurus";
                // alihkan ke halaman dashboard pegawai
                header("location: form/form_list.php");
            }else{
         
                // alihkan ke halaman login kembali
                header("location:index.php?pesan=gagal");
            }	
        }else{
            header("location:index.php?pesan=gagal");
        }
    }
} 
?>