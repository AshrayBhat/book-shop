<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="ashray"; // Mysql password 
$db_name="book"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$Email=$_POST['Email']; 
$Password=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$Email = stripslashes($Email);
$Password = stripslashes($Password);
$Email = mysql_real_escape_string($Email);
$Password = mysql_real_escape_string($Password);
$sql="SELECT * FROM $tbl_name WHERE Email='$Email' and Password='$Password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if(($count==1)||($count!=0))
{

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['Email']="Email";
$_SESSION['Password']="Password";
echo $_SESSION['Email']; 
header("location:admin_arena.html");
}
else {
echo "Wrong Email or Password";
}
?>