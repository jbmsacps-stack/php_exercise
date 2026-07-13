<!DOCTYPE html>
<html>
<body>

<h2>File Content Reversal</h2>

<?php

$content = file_get_contents("input.txt");

$reverse = strrev($content);

file_put_contents("output.txt", $reverse);

echo "<b>Original Content:</b><br>";
echo $content;

echo "<br><br>";

echo "<b>Reversed Content:</b><br>";
echo $reverse;

echo "<br><br>";

echo "Reversed content has been saved in <b>output.txt</b>";

?>

</body>
</html>