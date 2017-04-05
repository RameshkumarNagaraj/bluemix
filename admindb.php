<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("test",$con);
$username=$_POST['id'];
$password=$_POST['pwd'];
//First lets get the username and password from the user
$result = mysql_query("SELECT * FROM student");
while($row=mysql_fetch_array($result))
{
$user=$row['user name'];
$pass=$row['password'];
}
$num=mysql_num_rows($result);
echo $num;
for($i=1;$i<=$num; $i++){

if($username == $user && $password==$pass)
{
header("Location: adminlogin.php");
}
else if($password != $pass ||$username != $user )
{
echo("Please Enter Correct Username and Password ...");
header("Location: admin.php");
}
}

?> 