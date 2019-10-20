<?php
  $firstname=$_POST['fname'];
  
  $idnum=$_POST['Idnum'];
  $username=$_POST['username'];
  
  $address=$_POST['address'];
  $email=$_POST['email'];
  
  $password=$_POST['password'];
  if(!empty($firstname)||!empty($idnum)||!empty($address)||!empty($email)||!empty($password)||!empty($username))
  {
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="hospitalsystem";

    //create connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbName);
    if(mysqli_connect_error())
    {
      die('connect Error('.mysqli_connect_erron().')'.mysqli_connect_erron());
    }else {
      // code...
      $SELECT="SELECT patId from patient where patId=? Limit 1";
      $Insert="INSERT into patient (patId,firstname,email,username,address,password) values(?,?,?,?,?,?)";

      $stmt=$conn->prepare($SELECT);
      $stmt->bind_param("s",$idnum);
      $stmt->execute();
      $stmt->bind_result($idnum);
      $stmt->store_result();
      $rnum=$stmt->num_rows;

      if($rnum==0)
      {
        $stmt->close();

      $stmt= $conn->prepare($Insert);
      $stmt->bind_param("ssssss",$idnum,$firstname,$email,$username,$address,$password);
      $stmt->execute();
      echo"data successfully stored";
      //echo"lastname is"."$lastname";
      //$stmt->close();
      //$conn->close();
    }
    else {
      // code...
      echo"someone already has that identity number";
    }
    $stmt->close();
    $conn->close();
    }

  }
  else {
    // code...
    echo "all field are required";
    die();
  }
 