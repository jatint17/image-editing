<html>
<h1 id="head">
<?php session_start();
$con=mysqli_connect('localhost','root','','demo',"3308");

$user=$_POST['username'];
$pass=$_POST['pass'];

$s="select * from loginform where username='$user' and password='$pass'";
$res=mysqli_query($con,$s);
if(mysqli_num_rows($res)==1)
{
  echo "Welcome $user";
  include "index.php";
}
else
{
  echo "Wrong username or password.";
}
?>
</h1>
</html>