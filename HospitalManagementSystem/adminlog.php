
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username=  stripcslashes($username);
$password=  stripcslashes($password);
$username=  mysql_real_escape_string($username);
$password=  mysql_real_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("hospitalsystem");
$result=  mysql_query("SELECT * FROM tblAdmin WHERE username='$username' and password='$password'")
 or die("Failed to query database".mysql_error());
$row=  mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    echo " WELCOME ".$row['username'];
    echo"<br><a href='continue.php'>continue</a>";
}else
    {
    echo"Failed to Login!";
}
 
?>