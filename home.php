<?php session_start();?>

<html>
<script src="simpleimage.js"></script>
<script src="uploadfg.js"></script>
<link rel="stylesheet" type="text/css" href="styleit.css">
<head>
  <h1>
  
  <?php
  
  if(isset($_SESSION['user']))
  {
    $us=$_SESSION['user'];
    echo "Jatin welcomes $us to<br>
      Green Screen Background Changer in a Webpage";

    echo "</h1></head>
    <body>
      This is a website for changing the background of the green screen image you upload to the background you desire.
      <br>
      <div id='one'>
      <a href='index.php'>Home </a>
      <a href='logout.php'>Logout</a>
      <a href='abs.php'>About Us?</a>
      </div>";
  }
  else
  {
    echo "Jatin welcomes you to<br>
    Green Screen Background Changer in a Webpage";
  
    echo "</h1></head>
    <body>
      This is a website for changing the background of the green screen image you upload to the background you desire.
      <br>
      <div id='one'>
      <a href='index.php'>Home </a>
      <a href='login.php'>Login/Sign Up </a>
      <a href='abs.php'>About Us?</a>
      </div>";
  }?>
  
  <canvas id="fgc"></canvas>
  <canvas id="bgc"></canvas>
  <canvas id="gsc"></canvas>
  <p>Foreground :
    <input type="file" multiple="false" accept="image/*" onchange="uploadfg()" id="fgi">
  </p>
  <p>Background :
    <input type="file" multiple="false" accept="image/*" onchange="uploadbg()" id="bgi">
  </p>
  <p>Merge!
    <input type="button" value="Merge it" onclick="greenscreen()" id="gsmerge">
  </p>
</body>
</html>