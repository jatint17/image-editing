<html>
<link rel="stylesheet" type="text/css" href="styleit.css">
<h1>
<?php session_start();
$con=mysqli_connect('localhost','root','','demo',"3308");

$user=$_POST['username'];
$pass=$_POST['pass'];

$s="select * from loginform where username='$user'";
$res=mysqli_query($con,$s);
if(mysqli_num_rows($res)==1)
{
  echo "taken :D";
}
else
{
  $reg="insert into loginform(username,password) values ('$user','$pass')";
  mysqli_query($con,$reg);
  echo "Reg success";
}

?>
</h1>
</html>