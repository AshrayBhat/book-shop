<html>
<body>

<?php
$dbserver="localhost";
$username="root";
$password="ashray"; // if it is exist in your database other wise it will be null
$connection=mysql_connect("$dbserver","$username","$password")or die("could not connect to the server");
$databasename="book";
mysql_select_db("$databasename", $connection)or die("could not select database");
$a=$_POST["ISBNNo"];
$b=$_POST["Price"];
$c=$_POST["NumOfCopies"];
$str="UPDATE bookdetails SET Price='$b',NumOfCopies='$c' where ISBNNo='$a'";
$query = mysql_query("$str") or die ("Could not do,may be ID you have entered is wrong") ;
 
  echo " Your Bookstore has been modified"
 ?>

 </body>
</html>
