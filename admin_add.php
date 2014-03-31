<html>
<body>
welcome

<?php
$dbserver="localhost";
$username="root";
$password="ashray"; // if it is exist in your database other wise it will be null($password="")
$connection=mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
$databasename="book";
mysql_select_db("$databasename", $connection)or die("could not select database");
$a=$_POST["ISBN-No"];
$b=$_POST["BookName"];
$c=$_POST["BookAuthor"];
$d=$_POST["Publisher"];
$e=$_POST["Price"];
$f=$_POST["NumOfCopies"];
if (!$a||!$b||!$c||!$d||!$e||!$f)
{
  echo "All fields are required";
   exit();
}
$str="INSERT INTO bookdetails VALUES('$a','$b','$c','$d','$e','$f')";
$sql=mysql_query("$str");
if (mysql_errno() == 1062) {
    print 'Item already present';
}elseif(!$sql)
{
  echo"Invalid values";
}else
echo "Product is added sucessfully";
?>
</html>
</body>