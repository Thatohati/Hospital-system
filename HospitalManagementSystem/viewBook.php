<?php

include_once('connection.php');
$query="select * from tblbook";
$result=mysql_query($query);
?>

<html>
    <head><title>TMMV PRIVATE HOSPITAL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <h1 align="center">APPOINTMENTS</h1>
                
            <table align="center" border="1px" >
                
                <tr>
                    <th>BOOK NUM</th>
                    <th>PATIENT ID</th>
                    <th>PATIENT EMAIL</th>
                    <th>PATIENT CONTACT</th>
                    <th>DEPARTMENT </th>
                    <th>MONTH</th>
                    <th>DAY</th>
                    <th>YEAR</th>
                    <th>TIME</th>
                </tr>
                <?php
                while($row=mysql_fetch_assoc($result)){
                    ?>
                
                    
                    
                <tr>
                    <td><?php echo $row['bookno'];?></td>
                    <td><?php echo $row['pname'];?></td>
                    <td><?php echo $row['pnum'];?></td>
                    <td><?php echo $row['pcontact'];?></td>
                    <td><?php echo $row['deptc'];?></td>
                    <td><?php echo $row['month'];?></td>
                    <td><?php echo $row['day'];?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php echo $row['time'];?></td>
                    
                    
                
                </tr>
                <?php
                }
                ?>
                
            </table>
                
        </form>
            
    </body>
    
    
    
    
</html>