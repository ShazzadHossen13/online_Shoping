<html>
<head>
<title>LOGIN</title>
<style>
form {
    border: 3px solid #f1f1f1;
    font-family: sans-serif;
}

input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

.Regbutton {
    width: auto;
    padding: 10px 18px;
    background-color: #ECE105;
}



/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .Regbutton {
        width: 100%;
    }
}
</style>
<link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
    <body>
   <div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">ShopClones</a>
			</div>
       </div>
    </div>
    <h1>LOGIN</h1>
<form action="login_verf.php" method="POST" name="userLogin">
<div class="container">
    <font size='3'>
        <label for="email"><b>Email ID</b></label>
    <input type="email" placeholder="Email ID" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" id="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <input type="submit" value="LOGIN">
    </font>
  </div>

  <div class="container" style="background-color:#f1f1f1">
<B>New User ??</B>
    <button type="button" class="Regbutton"><a href="reg.php">Register</a></button>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>
</body>
</html>