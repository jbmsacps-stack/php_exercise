<!DOCTYPE html>
<html>
<body>

<h2>Row and Column Sum</h2>

<form method="post">
<table border="1">

<tr>
<td><input type="number" name="a"></td>
<td><input type="number" name="b"></td>
</tr>

<tr>
<td><input type="number" name="c"></td>
<td><input type="number" name="d"></td>
</tr>

</table><br>

<input type="submit" value="Calculate">
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];

$r1=$a+$b;
$r2=$c+$d;

$c1=$a+$c;
$c2=$b+$d;

$total=$r1+$r2;

echo "<h3>Table with Row and Column Sums</h3>";

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<td>$a</td>";
echo "<td>$b</td>";
echo "<td><b>$r1</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td>$c</td>";
echo "<td>$d</td>";
echo "<td><b>$r2</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>$c1</b></td>";
echo "<td><b>$c2</b></td>";
echo "<td><b>$total</b></td>";
echo "</tr>";

echo "</table>";

}

?>

</body>
</html>