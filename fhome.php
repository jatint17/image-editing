<?php session_start(); ?>
<html>
<script src="simpleimage.js"></script>
<script src="filter.js"></script>
<link rel="stylesheet" type="text/css" href="styleit.css">
<head>
  <h1>Jatin welcomes you to<br>
      Image Filters in a Webpage</h1>
</head>
<body>
  This is a website for applying desired filters to an image you upload.
  <br>
  <div id="one">
  <a href="index.php">Home </a>
  <a href="login.php">Login/Sign Up </a>
  <a href="abs.php">About Us?</a>
  </div>
  <canvas id="fgc"></canvas>
  <canvas id="gsc"></canvas>
  <p>Please select an image :
    <input type="file" multiple="false" accept="image/*" onchange="uploadfg()" id="fgi">
  </p>
  <p>Apply filters :
    <input type="button" value="Grayscale" onclick="grayscale()">
    <input type="button" value="F1" onclick="f1()">
    <input type="button" value="F2" onclick="f2()">
  </p>
</body>
</html>