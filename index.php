<?php include ('header.php');
if(isset($_POST['login']))
{
    echo '<pre>';
    print_r($_POST);
}
?>
<h2>Login</h2>
<form method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr> <tr>
            <td>Password</td>
            <td><input type="text" name="password" required></td>
        </tr>
        <td></td>
        <td><input type="submit" name="login" value="login"></td>
        </tr>
    </table>



</form>

<?php include ('footer.php');?>