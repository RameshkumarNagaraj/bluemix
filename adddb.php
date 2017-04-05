<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="bluemix"; 
$tbl_name="busnodetails"; 


mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$busroot=$_POST['busroot'];
$busno=$_POST['busno'];


$sql="INSERT INTO $tbl_name(busno,busroot)VALUES('$busno', '$busroot')";
$result=mysql_query($sql);


?>
<?php
mysql_close();
?>