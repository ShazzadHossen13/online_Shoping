<?php 
	include('config.php');
	session_start();
		$email=$_POST['email'];
        $psw=$_POST['psw'];
		$sql="SELECT * FROM customer WHERE email='$email' AND password='$psw'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		if($count==1){
				$row=mysqli_fetch_array($run_query);
				$_SESSION['uid']=$row['cid'];
				$_SESSION['uname']=$row['name'];
				echo "login true";
           header('location: index.html');
		}
    if($count==0){
        echo "<h2><b>INCORRECT EMAIL OR PASSWORD</b></h2>";
        header('Refresh:2 url="login.php"');
    }
			
	//}

 ?>