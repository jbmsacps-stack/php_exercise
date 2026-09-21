<!DOCTYPE html>
<html>
<body>

<h2>XML Email Extraction</h2>

<form method="post">
    <button name="display">Display Emails</button>
</form>

<?php
if (isset($_POST['display'])) {
    $xml = simplexml_load_file("email.xml");

    echo "<h3>Email Addresses</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr><th>S.No</th><th>Name</th><th>Email Address</th></tr>";

    $i = 1;
    foreach ($xml->email as $email)
        echo "<tr><td>".$i++."</td><td>".$email->name."</td><td>".$email->address."</td></tr>";

    echo "</table>";
}
?>

</body>
</html>
