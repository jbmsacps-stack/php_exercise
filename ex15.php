<!DOCTYPE html>
<html>
<body>

<h2>MySQL to XML</h2>

<form method="post">
<button name="generate">Generate XML</button>
</form>

<?php
if(isset($_POST['generate'])){
    $c=mysqli_connect("localhost","root","","college");
    $r=mysqli_query($c,"SELECT * FROM student");
    $x=new DOMDocument("1.0","UTF-8");
    $root=$x->createElement("students");

    while($row=mysqli_fetch_assoc($r)){
        $s=$x->createElement("student");
        foreach(["id","name","mark"] as $v)
            $s->appendChild($x->createElement($v,$row[$v]));
        $root->appendChild($s);
    }

    $x->appendChild($root);
    $x->save("student.xml");

    echo "XML File Generated Successfully.";
    echo "<h3>Contents of student.xml</h3><pre>";
    echo htmlspecialchars(file_get_contents("student.xml"));
    echo "</pre>";
    mysqli_close($c);
}
?>

</body>
</html>
