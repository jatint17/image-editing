<html>
<head>
  <h1>Hello<br>Please Sign Up/Sign In</h1>
  </head>
<body>
  <div id="logingoto">
    <a href="index.php"> Home </a>
  </div>
Please sign up if you're a new user.<br>
  <div id="two">
  <form method="POST" action="process2.php">
  Enter username : <input type="text" name="username"><br>
  Enter password : <input type="text" name="pass"><br>
  <input type="submit" name="submit" value="Sign Up"/>
  </form>
  </div>
  <br>
  </body>
  <body>
  <div id="text2">Or Sign in if you're an existing user.</div>
  <div id="three">
  <form method="POST" action="process1.php">
  Enter username : <input type="text" name="username"><br>
  Enter password : <input type="text" name="pass"><br>
  <input type="submit" name="submit" value="Sign in"/>
  </form>
  </div>
</body>
<link rel="stylesheet" type="text/css" href="styleit.css">
</html>