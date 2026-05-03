<?php include 'db.php'; ?>
<!DOCTYPE html>
<html><body>

<h2>Add Student</h2>
<form method="POST">
Name:<input type="text" name="name"><br><br>
Email:<input type="email" name="email"><br><br>
Reg:<input type="text" name="reg"><br><br>
Dept:<input type="text" name="dept"><br><br>
<button name="submit">Add</button>
</form>

<a href="index.php">Back</a>

<?php
if(isset($_POST['submit'])){
$n=$_POST['name'];
$e=$_POST['email'];
$r=$_POST['reg'];
$d=$_POST['dept'];
$conn->query("INSERT INTO students(name,email,registration_no,department)
VALUES('$n','$e','$r','$d')");
echo "Added!";
}
?>

</body></html>