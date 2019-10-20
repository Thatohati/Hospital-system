<?php if(isset($_POST['submit']))
    //$connection=new mysqli("localhost","root","","hospitalsystem");
    include_once('connection.php');
$q=$connection->real_escape_string($_POST['q']);
 
$data=$connection->query("SELECT * FROM patient WHERE patId LIKE '%$q%' ");
if($data->num_rows>0){}
else{
    echo"your search doesn't match any data";
}
        ?>
<head><link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
<form action="search.php" method="POST">
    <input class="text" type="text"  name="q" placeholder="search">
    <button class="submit" type="submit" name="submit">SEARCH</button>
</form>

    <br>
    <table>
       
    </table>
</body>