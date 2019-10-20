<?php

$username =$_POST['username'];
$password=$_POST['password'];
$username=  stripcslashes($username);
$password=  stripcslashes($password);
$username=  mysql_real_escape_string($email);
$password=  mysql_real_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("hospitalsystem");
$result=  mysql_query("SELECT * FROM tbldoc WHERE docusername='$username' and docpassword='$password'")
 or die("Failed to query database".mysql_error());
$row=  mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    echo " WELCOME ".$row['username'];
   echo"<br><a href ='doccon.php'>Continue</a>";
    echo"<br><a href ='index.php'> LOGOUT </a>";
}else
    {
    echo"Failed to Login!";
}
?>
