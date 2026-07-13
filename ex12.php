<!DOCTYPE html>
<html>
<body>

<h2>Student Mark Sheet</h2>

<?php

$conn = mysqli_connect("localhost","root","","college");

if(!$conn)
{
    die("Connection Failed");
}

// Insert
mysqli_query($conn,"INSERT INTO student VALUES(1,'Raj',85)");
echo "Record Inserted<br>";

// Update
mysqli_query($conn,"UPDATE student SET mark=95 WHERE id=1");
echo "Record Updated<br>";

// Display
echo "<h3>Student Records</h3>";

$result = mysqli_query($conn,"SELECT * FROM student");

echo "<table border='1' cellpadding='8'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Mark</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['mark']."</td>";
    echo "</tr>";
}

echo "</table>";

// Delete
mysqli_query($conn,"DELETE FROM student WHERE id=1");
echo "<br><br>Record Deleted";

mysqli_close($conn);

?>

</body>
</html>