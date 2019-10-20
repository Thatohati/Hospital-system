<?php

include_once('connection.php');
$query="select * from tbldoc";
$result=mysql_query($query);
?>

<html>
    <head><title>TMMV PRIVATE HOSPITAL</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    
    <body>
        
        <h1 align="center">REGISTERED DOCTORS</h1>
                
            <table align="center" border="1px" >
                
                <tr>
                    <th>DOC NUM</th>
                    <th>DOCTOR ID</th>
                    <th>DOCTOR'S NAME</th>
                    <th>DEPARTMENT</th>
                    <th>ADDRESS</th>
                    <th>USERNAME</th>
                    <th>CONTACT DETAILS</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    
                </tr>
                <?php
                while($row=mysql_fetch_assoc($result)){
                    ?>
                
                    
                    
                <tr>
                    <td><?php echo $row['idNum'];?></td>
                    <td><?php echo $row['docId'];?></td>
                    <td><?php echo $row['dept'];?></td>
                    <td><?php echo $row['docaddress'];?></td>
                    <td><?php echo $row['docusername'];?></td>
                    <td><?php echo $row['doccontact'];?></td>
                    <td><?php echo $row['docemail'];?></td>
                    <td><?php echo $row['docpassword'];?></td>
                    
                
                </tr>
                <?php
                }
                ?>
                
            </table>
                
        
            
    </body>
    
    
    
    
</html>