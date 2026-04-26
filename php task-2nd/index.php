<?php include 'validate.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Student Registration Form</h2>

<!-- Error Messages -->
<?php
if (!empty($errors)) {
    foreach ($errors as $e) {
        echo "<p class='error'>$e</p>";
    }
}
?>

<!-- Success Message -->
<?php
if (isset($success) && $success) {
    echo "<h3 class='success'>Registration Successful!</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Username: $username <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender <br>";
    echo "Course: $course <br>";
}
?>

<form method="POST">

    Full Name: <input type="text" name="name" value="<?php echo $name ?? ''; ?>"><br><br>

    Email: <input type="text" name="email" value="<?php echo $email ?? ''; ?>"><br><br>

    Username: <input type="text" name="username" value="<?php echo $username ?? ''; ?>"><br><br>

    Password: <input type="password" name="password"><br><br>

    Confirm Password: <input type="password" name="confirm"><br><br>

    Age: <input type="number" name="age" value="<?php echo $age ?? ''; ?>"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course">
        <option value="">Select Course</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
    </select>
    <br><br>

    <input type="checkbox" name="terms"> I accept Terms & Conditions
    <br><br>

    <input type="submit" name="register" value="Register">

</form>

</body>
</html>