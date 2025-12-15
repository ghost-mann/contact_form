<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
<form action="index.php" method="post">
<div class="parent-container">
    <div class="centered-div">
    <h1>Contact Form</h1>
    <h3>First Name: </h3>
        <input type="text" name="firstName" value="<?php echo isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : ''; ?>" placeholder="Enter first name">
    <h3>Last Name: </h3>
        <input type="text" name="firstName" value="<?php echo isset($_POST['firstName']) ? htmlspecialchars($_POST['lastName']) : ''; ?>" placeholder="Enter last name">
    <h3>Email:</h3>
        <input type="text" name="firstName" value="<?php echo isset($_POST['firstName']) ? htmlspecialchars($_POST['email']) : ''; ?>" placeholder="Enter email">
    <h3></h3>
    </div>
    <input type="submit">
</div>
</form>
</body>
</html>
