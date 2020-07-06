<?php
session_start();
if(isset($_SESSION['user']))
{
    session_destroy();
    include 'login.php';
}
else
{
    include 'login.php';
}
?>