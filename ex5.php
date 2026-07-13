<!DOCTYPE html>
<html>
<body>

<h2>Execution Delay</h2>

<form method="post">

Enter Delay Time (Seconds):
<input type="number" name="sec" required>

<input type="submit" value="Start">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sec = $_POST["sec"];

    echo "<b>Program Started...</b><br>";

    sleep($sec);

    echo "<b>Program Delayed for $sec Seconds.</b>";
}

?>

</body>
</html>