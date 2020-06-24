<?php
    include_once 'assets/database.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon"  href="img/logo.png">
    
</head>

  
<body>
	 <!--header-->
    <div class="header">
      <div class="container">
        <div class="logo">
          <img src="img/logo.png">
        </div>
        <div class="h1">
          <h1>MUMIAS YOUTH SPORTS ASSOSIATION</h1>
        </div>
      </div>
    </div>

 <!--control panel-->
    <div class="ctrl-panel sticky" id="myHeader">
      <div class="container">
        <a href="index.html"><button class="home">home</button></a>
        <a href="employability.html"><button class="emp">employability</button></a>
        <a href="index.html"><button id="various">various groups</button></a>
        <button>contact us</button>
        <button>Soccer rating</button>
        <button>more</button>
      </div>
    </div>


      <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      <div class="sign-up-htm">
        <form action="assets/signup.inc.php" method="POST">
        <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" class="input" name="user">
            </div>
            <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" class="input" data-type="password" name="password">
            </div>
            <div class="group">
            <label for="pass" class="label">Repeat Password</label>
            <input id="pass" type="password" class="input" data-type="password">
            </div>
            <div class="group">
            <label for="pass" class="label">Email Address</label>
            <input id="pass" type="text" class="input" name="email">
            </div>
            <div class="group">
            <input type="submit" class="button" value="Sign Up">
            </div>
        </form>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a></label>
        </div>
      </div>
    </div>
  </div>
</div>
   <footer>
  <div class="footer">
    <h2>How to reach us</h2>
    <h3>Email us  :   mysasc2020@gmail.com</h3>
    <h3>P.O.Box 176 Mumias</h3>
    <h3>tel:+254710132211</h3>
    <h3>+254703511486</h3>
  </div>
</footer>
</body>
</html>