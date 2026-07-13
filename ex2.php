<!DOCTYPE html>
<html>
<body>

<h2>Sum of First N Prime Numbers</h2>

<form method="post">
    Enter Number for Limit:
    <input type="number" name="n" required>
    <input type="submit" value="Find Sum">
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $n = $_POST["n"];

    $count = 0;
    $num = 2;
    $sum = 0;

    while($count < $n)
    {
        $prime = true;

        for($i=2; $i<$num; $i++)
        {
            if($num % $i == 0)
            {
                $prime = false;
                break;
            }
        }

        if($prime)
        {
            echo $num." ";
            $sum += $num;
            $count++;
        }

        $num++;
    }

    echo "<br><br>";
    echo "<b>Sum = $sum</b>";
}

?>

</body>
</html>