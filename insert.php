<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="bluemix"; 
$tbl_name="users"; 


mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST['name'];
$year=$_POST['class'];
$dept=$_POST['dept'];
$busroot=$_POST['root'];
$busno=$_POST['busno'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];


$sql="INSERT INTO $tbl_name(name,year,dept,busno,busroot,email,password)VALUES('$name','$year','$dept','$busno', '$busroot','$email','$pwd')";
$result=mysql_query($sql);
header("Location: adminnreg.php");

?>
<?php
mysql_close();
?>