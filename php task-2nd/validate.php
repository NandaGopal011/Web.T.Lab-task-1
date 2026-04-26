<?php

$errors = [];
$success = false;

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $age = $_POST['age'];
    $gender = $_POST['gender'] ?? "";
    $course = $_POST['course'] ?? "";
    $terms = $_POST['terms'] ?? "";

    // Empty check
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm) || empty($age)) {
        $errors[] = "All fields are required!";
    }

    // Name
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Name must contain only letters!";
    }

    // Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email!";
    }

    // Username
    if (strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters!";
    }

    // Password
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters!";
    }

    // Match
    if ($password !== $confirm) {
        $errors[] = "Passwords do not match!";
    }

    // Age
    if ($age < 18) {
        $errors[] = "Age must be 18+!";
    }

    // Gender
    if (empty($gender)) {
        $errors[] = "Select gender!";
    }

    // Course
    if (empty($course)) {
        $errors[] = "Select course!";
    }

    // Terms
    if (empty($terms)) {
        $errors[] = "Accept terms!";
    }

    // Success
    if (empty($errors)) {
        $success = true;
    }
}
?>