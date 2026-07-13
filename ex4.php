<!DOCTYPE html>
<html>
<body>

<h2>Words to Digits Conversion</h2>

<form method="post">

Enter Number in Words:
<input type="text" name="word" required>

<input type="submit" value="Convert">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $word = strtolower($_POST["word"]);

    $num = array(
        "zero"=>0,
        "one"=>1,
        "two"=>2,
        "three"=>3,
        "four"=>4,
        "five"=>5,
        "six"=>6,
        "seven"=>7,
        "eight"=>8,
        "nine"=>9,
        "ten"=>10
    );

    if(isset($num[$word]))
    {
        echo "<br><b>Number = ".$num[$word]."</b>";
    }
    else
    {
        echo "<br><b>Word Not Found</b>";
    }
}

?>

</body>
</html>