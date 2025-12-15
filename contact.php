<?php

// Confirming form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receive and clean input
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
}
