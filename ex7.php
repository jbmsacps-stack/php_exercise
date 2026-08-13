<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table</h2>

<form method="post">

Enter a Number:
<input type="number" name="num" required><br><br>

Enter the Limit:

<input type="number" name="limit" required><br><br>

<input type="submit" value="Generate">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num = $_POST["num"];
    $limit = $_POST["limit"];

    echo "<h3>Multiplication Table of $num</h3>";

    for($i=1; $i<=$limit; $i++)
    {
        echo "$num × $i = ".($num*$i)."<br>";
    }
}

?>

</body>
</html>
