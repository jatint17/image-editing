<?php session_start(); ?>
<html>
<head>
  <h1>Jatin welcomes you to<br>
      Green Screen merger in a webpage</h1>
</head>
<body>
  <div id="one">
  <a href="home.php">Home </a>
  <a href="login.php">Login/Sign Up </a>
  <a href="abs.php">About Us?</a>
  </div><br>
  This is a website for using filters on photos you upload.
  <br>
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
<script src="simpleimage.js"></script>
<script src="uploadfg.js"></script>
<link rel="stylesheet" type="text/css" href="styleit.css">
</html>