<!DOCTYPE html>
<html>
<body>

<h2>XML DOM Retrieval</h2>

<form method="post">
    <button name="display">Display</button>
</form>

<?php
if (isset($_POST['display'])) {
    $dom = new DOMDocument();
    $dom->load("tree.xml");

    echo "<b>Method 1:</b> ".$dom->getElementsByTagName("name")[0]->nodeValue."<br><br>";

    echo "<b>Method 2:</b> ".$dom->documentElement->getElementsByTagName("name")[0]->nodeValue."<br><br>";

    $xpath = new DOMXPath($dom);
    echo "<b>Method 3:</b> ".$xpath->query("//name")[0]->nodeValue;
}
?>

</body>
</html>
