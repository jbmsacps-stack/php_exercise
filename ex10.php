<!DOCTYPE html>
<html>
<body>

<h2>Rename .txt File to .xtx</h2>

<form method="post">

Enter File Name:
<input type="text" name="filename" placeholder="sample.txt" required>

<input type="submit" name="rename" value="Rename">

</form>

<?php

if(isset($_POST["rename"]))
{
    $file = $_POST["filename"];

    if(pathinfo($file, PATHINFO_EXTENSION) == "txt")
    {
        $newfile = str_replace(".txt", ".xtx", $file);

        if(rename($file, $newfile))
        {
            echo "$file renamed to $newfile";
        }
        else
        {
            echo "File not found or rename failed.";
        }
    }
    else
    {
        echo "Please enter a .txt file.";
    }
}

?>

</body>
</html>
