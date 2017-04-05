<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("bluemix",$con);
$username=$_POST['email'];
$password=$_POST['pwd'];
//First lets get the username and password from the user
$result = mysql_query("SELECT * FROM users");
while($row=mysql_fetch_array($result))
{
$user=$row['email'];
$pass=$row['password'];
}
$num=mysql_num_rows($result);
//echo $num;
for($i=1;$i<=$num; $i++){

if($username == $user && $password==$pass)
{
header("Location: stuview.php");
}
else if($password != $pass ||$username != $user )
{
echo("Please Enter Correct Username and Password ...");
header("Location: stuview.php");
}
}

?> 