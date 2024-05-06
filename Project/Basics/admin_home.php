<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Welcome admin</h1>
	
	<h2><?php echo $_SESSION["aname"] ?></h2>
	<h3>View</h3>
	<a href="admin_profile.php">Profile</a>
	<h3>Edit</h3>
	<a href="../Admin/admin_change_password.php">Password</a>
	<br>
	<a href="District.php">district</a>
	<br>
	<a href="Place.php">place</a>
	<br>
	<a href="admin_change_contact.php">Contact</a>
	<br>
	
	<a href="../Admin/product.php">product</a>
	<br><a href="Subcategory.php">subcategory</a>
	
</body>

</html>
