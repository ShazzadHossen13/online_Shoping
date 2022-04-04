<?php 
	
	include('config.php');
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$mobno=$_POST['mobno'];
    $address=$_POST['address'];
		if(strlen($mobno) != 10){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
                <h3><b>REDIRECTING To Signup PAGE.............</b></h3>
			</div>
		";
            header('Refresh:2 url="reg.php"');
		exit();
		}

		//check for available user-details
		$sql = "SELECT cid FROM customer WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($conn,$sql);
		$count_email = mysqli_num_rows($check_query);

		if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
                <h3><b>REDIRECTING TO Signup PAGE.............</b></h3>
			</div>
		";
            header('Refresh:2 url="reg.php"');
		exit();
		}
					$sql="INSERT INTO customer (name,mobno,email,password,address) VALUES('$name','$mobno','$email','$password','$address');";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
						echo "
								<div class='alert alert-success'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <h3><b>REDIRECTING TO LOGIN PAGE.............</b></h3>
								</div>
						";
                        header("Refresh:2; url='login.php'");
					}
                                        else
                                        {
                                            echo("Error description: " . mysqli_error($conn));
                                        }
                                            
?>
<html>
    <body>
        <p align="center">
    <img src="assets/images/loading.gif">
            </p>
    </body>
</html>