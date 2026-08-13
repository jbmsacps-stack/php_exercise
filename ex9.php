<!DOCTYPE html>
<html>
<body>

<h2>File Content Reversal</h2>

<form method="post">

    Enter Input File Name:
    <input type="text" name="input_file" required><br><br>

    Enter Output File Name:
    <input type="text" name="output_file" required><br><br>

    <input type="submit" value="Reverse File">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $input_file = $_POST["input_file"];
    $output_file = $_POST["output_file"];

    $content = file_get_contents($input_file);

    $reverse = strrev($content);

    file_put_contents($output_file, $reverse);

    echo "<b>Original Content:</b><br>";
    echo $content;

    echo "<br><br>";

    echo "<b>Reversed Content:</b><br>";
    echo $reverse;

    echo "<br><br>";

    echo "Reversed content has been saved in <b>$output_file</b>";
}

?>

</body>
</html>
