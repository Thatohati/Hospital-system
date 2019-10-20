<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$location=$_POST['location'];
$message=$_POST['message'];


//database connection
$conn=new mysqli('localhost','root','','hospitalsystem');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
     
}else{
    $stmt=$conn->prepare("insert into tblassistance(aname,aemail,acontact,alocation,amessage)values(?,?,?,?,?)");
    $stmt->bind_param("sssss" ,$name,$email,$contact,$location,$message);
    $stmt->execute();
    echo "Received Successfully...";
    $stmt->close();
    $conn->close();

}
