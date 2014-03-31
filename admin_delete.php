<html>
<body>
<?php
$dbserver="localhost";
$username="root";
$password="ashray"; // if it is exist in your database other wise it will be null($password="")
$connection=mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
$databasename="book";
mysql_select_db("$databasename", $connection)or die("could not select database");
$a=$_POST["ISBNNo"];
$str="delete from bookdetails where ISBNNo='$a'";
$sql=mysql_query("$str") or die("book not present");
echo "Product is deleted sucessfully";
?>
</html>
</body>