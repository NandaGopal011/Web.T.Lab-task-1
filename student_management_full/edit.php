<?php
include 'db.php';
$id=$_GET['id'];
$row=$conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html><body>

<h2>Edit</h2>
<form method="POST">
Name:<input name="name" value="<?=$row['name']?>"><br><br>
Email:<input name="email" value="<?=$row['email']?>"><br><br>
Dept:<input name="dept" value="<?=$row['department']?>"><br><br>
<button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
$conn->query("UPDATE students SET name='{$_POST['name']}',email='{$_POST['email']}',department='{$_POST['dept']}' WHERE id=$id");
echo "Updated!";
}
?>

</body></html>