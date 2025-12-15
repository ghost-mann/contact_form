<?php

// Confirming form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receive and clean input
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // basic validation
    if (empty($firstName) || empty($lastName) || empty($email)) {
        echo "All fields must be filled";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }  else {
        echo "Thanks for contacting us!";
        echo "<p><strong>First Name:</strong>" . htmlspecialchars($firstName) . "</p>";
        echo "<p><strong>Last Name:</strong>" . htmlspecialchars($lastName) . "</p>";
        echo "<p><strong>Email:</strong>" . htmlspecialchars($email) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
</body>
</html>
