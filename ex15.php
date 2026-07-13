<!DOCTYPE html>
<html>
<body>

<h2>MySQL to XML</h2>

<?php

$conn = mysqli_connect("localhost","root","","college");

$result = mysqli_query($conn,"SELECT * FROM student");

$xml = new DOMDocument("1.0","UTF-8");

$root = $xml->createElement("students");

while($row = mysqli_fetch_assoc($result))
{
    $student = $xml->createElement("student");

    $student->appendChild($xml->createElement("id",$row["id"]));
    $student->appendChild($xml->createElement("name",$row["name"]));
    $student->appendChild($xml->createElement("mark",$row["mark"]));

    $root->appendChild($student);
}

$xml->appendChild($root);

$xml->save("student.xml");

echo "XML File Created Successfully.";

mysqli_close($conn);

?>

</body>
</html>