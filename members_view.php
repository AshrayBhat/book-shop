<?php
$con=mysqli_connect("localhost","root","ashray","book");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$ISBNNo =$_POST["ISBNNo"];
$result = mysqli_query($con,"SELECT * FROM bookdetails WHERE ISBNNo='$ISBNNo'");

echo "<table border='1'>
<tr>
<th>ISBNNo</th>
<th>BookName</th>
<th>BookAuthor</th>
<th>Publisher</th>
<th>Price</th>
<th>NumOfCopies</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ISBNNo'] . "</td>";
  echo "<td>" . $row['BookName'] . "</td>";
  echo "<td>" . $row['AuthorName'] . "</td>";
  echo "<td>" . $row['Publisher'] . "</td>";
  echo "<td>" . $row['Price'] . "</td>";
  echo "<td>" . $row['NumOfCopies'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>