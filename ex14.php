<!DOCTYPE html>
<html>
<body>

<h2>XML DOM Retrieval</h2>

<?php

$dom = new DOMDocument();
$dom->load("tree.xml");

// Method 1
echo "<b>Method 1:</b> ";
echo $dom->getElementsByTagName("name")->item(0)->nodeValue;

echo "<br><br>";

// Method 2
echo "<b>Method 2:</b> ";
echo $dom->documentElement->firstChild->firstChild->nodeValue;

echo "<br><br>";

// Method 3
$xpath = new DOMXPath($dom);

echo "<b>Method 3:</b> ";
echo $xpath->query("//name")->item(0)->nodeValue;

?>

</body>
</html>