<?php

include_once('connection.php');
$query="select * from patient";
$result=mysql_query($query);
?>

<html>
    <head><title>TMMV PRIVATE HOSPITAL</title>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    
    <body>
        
        <h1 align="center">REGISTERED PATIENTS</h1>
                
            <table align="center" border="1px"  >
                
                <tr>
                    <th>First Name</th>
                    <th>Id Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Password</th>
                </tr>
                <?php
                while($row=mysql_fetch_assoc($result)){
                    ?>
                
                    
                    
                <tr>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['patId'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['password'];?></td>
                    
                
                </tr>
                <?php
                }
                ?>
                
            </table>
                
        </form>
            
    </body>
    
    
    
    
</html>