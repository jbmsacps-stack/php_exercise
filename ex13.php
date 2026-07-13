<!DOCTYPE html>
<html>
<body>

<h2>XML Email Extraction</h2>

<?php

$xml = simplexml_load_file("email.xml");

echo "<h3>Email Addresses</h3>";

foreach($xml->email as $email)
{
    echo $email."<br>";
}

?>

</body>
</html>