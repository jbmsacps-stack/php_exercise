<!DOCTYPE html>
<html>
<body>

<h2>Factorial of a Number</h2>

<form method="post">

Enter a Number:
<input type="number" name="num" required>

<input type="submit" value="Find Factorial">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num = $_POST["num"];
    $fact = 1;

    for($i=1; $i<=$num; $i++)
    {
        $fact = $fact * $i;
    }

    echo "<br><b>Factorial of $num = $fact</b>";
}

?>

</body>
</html>