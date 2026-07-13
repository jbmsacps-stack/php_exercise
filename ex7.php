<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table</h2>

<form method="post">

Enter a Number:
<input type="number" name="num" required>

<input type="submit" value="Generate">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num = $_POST["num"];

    echo "<h3>Multiplication Table of $num</h3>";

    for($i=1; $i<=10; $i++)
    {
        echo "$num × $i = ".($num*$i)."<br>";
    }
}

?>

</body>
</html>