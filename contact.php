<?php
echo 'My first php script';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
<form action="contact.php" method="post">
<div class="parent-container">
    <div class="centered-div">
    <h1>Contact Form</h1>
    <h3>First Name: </h3>
    <label>
        <input type="text">
    </label>
    <h3>Last Name: </h3>
    <label>
        <input type="text">
    </label>
    <h3>Email:</h3>
    <label>
        <input type=email>
    </label>
    <h3></h3>
    </div>
    <input type="submit">
</div>
</form>
</body>
</html>
