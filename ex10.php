<!DOCTYPE html>
<html>
<body>

<h2>Rename .txt Files to .xtx</h2>

<?php

$files = glob("*.txt");

foreach($files as $file)
{
    $newfile = str_replace(".txt", ".xtx", $file);

    rename($file, $newfile);

    echo "$file renamed to $newfile <br>";
}

?>

</body>
</html>