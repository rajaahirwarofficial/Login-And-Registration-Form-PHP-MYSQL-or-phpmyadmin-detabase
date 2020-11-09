<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>The King</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
</head>
<body>
 <header>
 	<div class="navbar">
 		<ul>
 			<li><a href="#">Home</a></li>
 			<li><a href="#">Download</a></li>
 			<li><a href="#">Contact</a></li>
 			<li><a href="#">About</a></li>
 		</ul>
 		<h2>Alpha Ethical Hack</h2>
 	</div>
 	<div class="loginbox" id="">
 		<div id="loginlogo"><h2>LogIn</h2></div>
 		 <form method="post" action="login.php">

    <?php include('errors.php'); ?>
 			<center><input type="text" name="username" class="email" placeholder="Email or Phone" required=""></center>
 			<center><input type="password" name="password" class="password" placeholder="Password" required=""></center>
 			<input type="submit" name="login_user" value="Login" class="submit">

 		<div class="createaccount"><a href="register.php"><h3>Create Account</h3></a></div>
  </form>
    </div>
 </header>
 <div class="buttomline">
 		<div class="buttomline1">
 			<div class="Policy">
 		     <ul>
 		 	   <li><a href="#">Support</a></li>|
 		 	   <li><a href="#">Carrers</a></li>|
 		 	   <li><a href="#">Policy</a></li>|
 		 	   <li><a href="#">Terms & Conditions</a></li>
 		     </ul>
 		     </div>
 		     <div class="socialicon">
 		        <ul>
 		 	       <li><a href="https://www.facebook.com" target="blank"><img src="images/facebook.png"></a></li>
 		 	       <li><a href="https://www.instagram.com" target="blank"><img src="images/instagram.png"></a></li>
 		 	       <li><a href="https://www.twitter.com" target="blank"><img src="images/twitter.png"></a></li>
 		 	       <li><a href="https://www.linkedin.com" target="blank"><img src="images/linkedin.png"></a></li>
 		        </ul>
 		     </div>
        </div>
 </div>
</body>
</html>