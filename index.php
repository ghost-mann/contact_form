<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <style>
        .parent-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .centered-div {
            text-align : left;
            padding: 20px;
            border: 1px solid  #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="contact.php" method="post">
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
