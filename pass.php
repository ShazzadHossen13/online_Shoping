<?php
include 'config.php';
session_start();
$uid=$_SESSION['uid'];
$opsw=$_POST['psw1'];
$psw=$_POST['psw2'];
$a="select * from customer where cid='$uid' and password='$opsw'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c==1)
{
$s="update customer set password='$psw' where cid='$uid'";
$r=mysqli_query($conn,$s);
if($r)
{
    session_destroy();
  echo "<div class='alert alert-danger' role='alert'><a href='index.php'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></a>
  					<strong><font color='black' size='5'> Password Changed</font></strong>
				</div>
					"; 
    header("Refresh:2; url='index.php'");
}
}
else
{
   echo "<div class='alert alert-danger' role='alert'><a href='passchange.html'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></a>
  					<strong><font color='black' size='5'>Current Password Incorrect</font></strong
				</div>
					"; 
    header("Refresh:2; url='passchange.html'"); 
}
?>