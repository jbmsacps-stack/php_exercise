<!DOCTYPE html>
<html>
<body>

<h2>Files Sorted by Last Modification Time</h2>

<form method="post">
    <button type="submit" name="display">Display Files</button>
</form>

<?php

if (isset($_POST['display'])) {

    $files = scandir(".");

    foreach ($files as $file) {
        if (is_file($file)) {
            $time[$file] = filemtime($file);
        }
    }

    arsort($time);

    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>File Name</th>";
    echo "<th>Last Modified Time</th>";
    echo "</tr>";

    foreach ($time as $file => $date) {
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . date("d-m-Y h:i:s A", $date) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

?>

</body>
</html>
