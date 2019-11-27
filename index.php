<?php
include 'class/guest.php';
$guest = new guest();
$guest->login();
?>
<html>
<form method="POST" action="" name="login">
    <tr>
        <th>Username</th>
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
</form>
</table>
</html>