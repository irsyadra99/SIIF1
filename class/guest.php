<?php
class guest {
    function __construct(){

    }
    function login(){
        session_start();
        include 'database.php';
        $db = new database();
 
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $db->cek_login($_POST['username'], $_POST['password']);
        }
    }
}
?>