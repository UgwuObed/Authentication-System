
<style type="text/css">
th{
    text-align: right;
}
h2 {
    text-align: center;
}
</style>
<table cellpadding="5" cellspasing="10" align="center">
<h2>Authentication System</h2>
<form method="post" action="Authentication.php">
<tr><th>Email</th><td><input type="text"  id="email" name="email"></td></tr>
<tr><th>Password</th><td><input type="password" id="password" name="password"></td></tr>
<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
<tr><td colspan="2" align="right"><input type="submit" value="Login" name="logedin"></td></tr>
</form>
</table>

<php 
if(isset($_COOKIE['email']) and isset($_COOKIE['pass' ] ) ) { 
 $email = $_COOKIE['email'];
 $pass = $_COOKIE['pass'];

 echo $email;
?>
