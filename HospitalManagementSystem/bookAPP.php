<?php
$name=$_POST['name'];
$id=$_POST['idnum'];
$pemail=$_POST['email'];
$pcontact=$_POST['contact'];
$ddept=$_POST['dept'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$time=$_POST['time'];


//database connection
$conn=new mysqli('localhost','root','','hospitalsystem');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
     
}else{
    $stmt=$conn->prepare("insert into tblbook(pname,pnum,pemail,pcontact,deptc,month,day,year,time)values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss" ,$name,$id,$pemail,$pcontact,$ddept,$month,$day,$year,$time);
    $stmt->execute();
    echo "Received Successfully...";
    $stmt->close();
    $conn->close();

}
