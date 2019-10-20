
<?php
  $firstname=$_POST['name'];
  $idnum=$_POST['Idnum'];
  $dept=$_POST['dept'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  
    
//database connection
$conn=new mysqli('localhost','root','','hospitalsystem');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
     
}else{
    $stmt=$conn->prepare("insert into tbldoc(docId,docname,dept,docaddress,docusername,doccontact,docemail,docPassword)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$firstname,$idnum,$dept,$contact,$address,$email,$username,$password);
    //$stmt->bind_param("sssssssss" ,$name,$id,$pemail,$pcontact,$ddept,$month,$day,$year,$time);
    
    $stmt->execute();
    echo "Received Successfully...";
    $stmt->close();
    $conn->close();

}
