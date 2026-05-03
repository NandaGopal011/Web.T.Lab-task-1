<?php include 'db.php'; ?>
<!DOCTYPE html>
<html><head>
<title>Student Management</title>
<link rel="stylesheet" href="style.css">
</head><body>

<h2>Student List</h2>
<a href="add.php">Add Student</a><br><br>

<table>
<tr><th>Name</th><th>Email</th><th>Reg No</th><th>Department</th><th>Action</th></tr>

<?php
$res=$conn->query("SELECT * FROM students");
while($row=$res->fetch_assoc()){
?>
<tr>
<td><?=$row['name']?></td>
<td><?=$row['email']?></td>
<td><?=$row['registration_no']?></td>
<td><?=$row['department']?></td>
<td>
<a href="edit.php?id=<?=$row['id']?>">Edit</a> |
<a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php } ?>
</table>

</body></html>