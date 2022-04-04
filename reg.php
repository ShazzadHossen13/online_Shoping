<!DOCTYPE html>
<html>
<head><title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
    padding: 40px;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.signupbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.signupbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">ShopClones</a>
			</div>
    </div>
    </div>
  <br><br><br><br>
    <vr > <h2><font color=#0000FF><b>SIGN UP</b></font></h2>
    <form name="regform" action="signup.php" id="regform" method="POST">
    <hr>
   <label for="name"><b>Name</b></label>
   <p align="center"><input type="text" placeholder="Name" id="name" name="name" required></p>
    <label for="pno"><b>Phone Number</b></label>
  <p align="center"> <input type="text" placeholder="Phone Number" id="mobno" name="mobno" required></p>
    <label for="email"><b>Email</b></label>
    <p align="center"><input type="email" placeholder="Email" name="email" id="email" required></p>

    <label for="psw"><b>Password</b></label>
    <p align="center"><input type="password" placeholder="Password" name="psw" id="psw" required></p>

    <label for="pswrepeat"><b>Repeat Password</b></label>
    <p align="center"><input type="password" placeholder="Repeat Password" name="psw3" id="psw3" required></p>
    <label for="address"><b>Address</b></label>
    <p align="center"><input type="text" placeholder="Address" name="address" id="address" required></p>
    <div class="clearfix">
      <input type="submit" value="Sign Up" class="signupbtn">
    </div>
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a></p>
  </div>
    </form>
    </vr>
</body>
</html>
