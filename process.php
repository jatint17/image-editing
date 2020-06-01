<?php
$username=$_POST['username'];
$password=$_POST['pass'];



mysql_connect("localhost","root","");
mysql_select_db("demo");
$res=mysql_query("select * from loginform where username='$username' and password='$password'");
$row=mysql_fetch_array($res);

if($row['username']==$username && $row['password']==$password)
{
  echo "success!";
}
else
{
  echo "Fail";
}
?>