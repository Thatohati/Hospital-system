<?php

include_once('connection.php');
$query="select * from tblassistance";
$result=mysql_query($query);
?>

<html>
    <head><title>TMMV PRIVATE HOSPITAL</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        
        <h1 align="center">EMERGENCY ASSITANCE REQUEST</h1>
                
            <table align="center" border="1px" >
                
                <tr>
                    <th>REQUEST NUMBER</th>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>CONTACT NUMBER</th>
                    <th>LOCATION</th>
                    <th>MESSAGE</th>
                </tr>
                <?php
                while($row=mysql_fetch_assoc($result)){
                    ?>
                
                    
                    
                <tr>
                    <td><?php echo $row['assId'];?></td>
                    <td><?php echo $row['aname'];?></td>
                    <td><?php echo $row['aemail'];?></td>
                    <td><?php echo $row['acontact'];?></td>
                    <td><?php echo $row['alocation'];?></td>
                    <td><?php echo $row['amessage'];?></td>
                    
                
                </tr>
                <?php
                }
                ?>
                
            </table>
                
        </form>
            
    </body>
    
    
    
    
</html>
