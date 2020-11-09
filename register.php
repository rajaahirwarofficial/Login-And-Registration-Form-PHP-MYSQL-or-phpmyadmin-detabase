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
    <div class="form-popup" id="myForm">
          <h2>Registration</h2>
        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
        <center><input type="text" name="username" class="Registration-input" placeholder="Username" required=""></center>
        <center><input type="text" name="name" class="Registration-input" placeholder="Full Name" required=""></center>
        <center><input type="email" name="email" class="Registration-input" placeholder="Email" required=""></center>
        <center><input type="text" name="mobile" class="Registration-input" placeholder="Mobile Number" required=""></center>
        <center><input type="password" name="password_1" class="Registration-input" placeholder="Password" required=""></center>    
        <center><input type="password" name="password_2" class="Registration-input" placeholder="Conform Password" required=""></center>   
        <center><input type="submit" name="reg_user" value="Registration" class="Registrationbtn"></center> 
       </div>
       </form>
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