<html>
<script src="simpleimage.js"></script>
<script src="uploadfg.js"></script>
<link rel="stylesheet" type="text/css" href="styleindex.css">

<head>
  <h1 id="head">Please Choose One</h1>
</head>

<body>
<div id="one">
  
  <?php
  if(isset($_SESSION['user']))
  {
    $us=$_SESSION['user'];
    echo "<h1>Welcome $us</h1>";
    echo "<a href='logout.php'>Logout</a>";
  }
  else
  {
    echo "<a href='login.php'>Login/Sign Up</a>";
  }
  ?>
  
  <a href="abs.php">About Us?</a>
  </div>
  
  <br>
  <a href="home.php"><h1 id="text"><br><br>Green Screen</h1></a>
  <a href="fhome.php"><h1 id="text"><br><br>Filter Screen</h1></a>
  <br>
  
</body>
</html>