<!DOCTYPE html>
<html>
<body>

<h2>Student Mark Sheet</h2>

<form method="post">
ID: <input name="id"><br><br>
Name: <input name="name"><br><br>
Tamil: <input name="tamil"><br><br>
English: <input name="english"><br><br>
Maths: <input name="maths"><br><br>

<button name="insert">Insert</button>
<button name="update">Update</button>
<button name="delete">Delete</button>
</form>

<?php
$c=mysqli_connect("localhost","root","","college");
extract($_POST);

if(isset($_POST['insert']))
    mysqli_query($c,"INSERT INTO student VALUES('$id','$name','$tamil','$english','$maths')") && print "Record Inserted";

if(isset($_POST['update']))
    mysqli_query($c,"UPDATE student SET name='$name',tamil='$tamil',english='$english',maths='$maths' WHERE id='$id'") && print "Record Updated";

if(isset($_POST['delete']))
    mysqli_query($c,"DELETE FROM student WHERE id='$id'") && print "Record Deleted";

$r=mysqli_query($c,"SELECT * FROM student");

echo "<h3>Student Records</h3>
<table border='1' cellpadding='8'>
<tr><th>ID</th><th>Name</th><th>Tamil</th><th>English</th><th>Maths</th></tr>";

while($x=mysqli_fetch_assoc($r))
    echo "<tr><td>{$x['id']}</td><td>{$x['name']}</td><td>{$x['tamil']}</td><td>{$x['english']}</td><td>{$x['maths']}</td></tr>";

echo "</table>";
?>
</body>
</html>
