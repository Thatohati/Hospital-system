

<?php
session_start();
//error_reporting(0);
include('config.php');
//include('checklogin.php');
//check_login();
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
$pwd=$_POST['password'];

$sql=mysqli_query($con,"Update tbldoc set docpassword='$pwd' where docusername='$uname'");
if($sql)
{
echo"Your Profile updated Successfully";


}

}
