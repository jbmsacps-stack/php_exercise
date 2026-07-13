<!DOCTYPE html>
<html>
<body>

<h2>File List Sorted by Last Modification Time</h2>

<?php

$files = scandir(".");

foreach($files as $file)
{
    if(is_file($file))
    {
        $time[$file] = filemtime($file);
    }
}

arsort($time);

foreach($time as $file => $date)
{
    echo $file." - ".date("d-m-Y H:i:s",$date)."<br>";
}

?>

</body>
</html>