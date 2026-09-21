<!DOCTYPE html>
<html>
<head>
    <title>XML Email Extraction</title>
</head>
<body>

<h2>XML Email Extraction</h2>

<form method="post">
    <button type="submit" name="display">Display Emails</button>
</form>

<?php

if (isset($_POST['display'])) {

    $xml = simplexml_load_file("email.xml");

    echo "<h3>Email Addresses</h3>";

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>";
    echo "<th>S.No</th>";
    echo "<th>Name</th>";
    echo "<th>Email Address</th>";
    echo "</tr>";

    $sno = 1;

    foreach ($xml->email as $email) {

        echo "<tr>";
        echo "<td>" . $sno . "</td>";
        echo "<td>" . $email->name . "</td>";
        echo "<td>" . $email->address . "</td>";
        echo "</tr>";

        $sno++;
    }

    echo "</table>";
}

?>

</body>
</html>
