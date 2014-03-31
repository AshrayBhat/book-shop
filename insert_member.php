<?php
$con=mysqli_connect("localhost","root","ashray","book");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO members VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[Email]','$_POST[MobileNo]','$_POST[Address]','$_POST[PinCode]','$_POST[Password]','$_POST[ConfirmPassword]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added suceesfully";

mysqli_close($con);

?>