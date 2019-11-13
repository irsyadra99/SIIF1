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
            $db->check_login($_POST['username'], $_POST['password']);
        }
    }
}
?>
<html>
<form method="POST" action="" name="login">
    <tr>
        <th>Email or Username</th>
        <td> : </td>
        <td>
            <input type="text" name="username"/>
        </td>
    </tr>
    <tr>
        <th>Password</th>
        <td> : </td>
        <td>
            <input type="password" name="password"/>
        </td>
        </tr>
        <tr>
        <th></th>
        <td> </td>
        <td>
            <input type="submit" value="Login"/>
        </td>
    </tr>
    <tr>
        <th>Don't have account?</th>
        <td> : </td>
        <td>
            <a href="./register.php"><b>Register Now</b></a> <br>
        </td>
    </tr>
</form>
</table>
</html>