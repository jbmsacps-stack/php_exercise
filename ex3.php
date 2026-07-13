<!DOCTYPE html>
<html>
<body>

<h2>Email Validation</h2>

<form method="post">

Enter Email:
<input type="text" name="email" required>

<input type="submit" value="Check">

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email = $_POST["email"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<br><b>Email Address is Valid.</b>";
    }
    else
    {
        echo "<br><b>Email Address is Invalid.</b>";
    }
}

?>

</body>
</html>