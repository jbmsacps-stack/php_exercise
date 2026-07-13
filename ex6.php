<!DOCTYPE html>
<html>
<body>

<h2>First Character Colour</h2>

<form method="post">

Enter a Word:
<input type="text" name="word" required>

<input type="submit" value="Change Colour">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $word = $_POST["word"];

    $first = substr($word,0,1);
    $rest = substr($word,1);

    echo "<br><b>Output:</b><br>";
    echo "<span style='color:red; font-size:25px;'>$first</span>$rest";
}

?>

</body>
</html>