<?php
session_start();
include("../assets/connection/connection.php");
    $sel="select * from tbl_admin where admin_ID='".$_SESSION['aid']."'";
	$res=$con->query($sel);
	if($res->num_rows>0)
	{
		$row=$res->fetch_assoc();
		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Profile</h1>
	
<h2><?php echo $_SESSION["aname"] ?></h2>
	
	
<form id="form1" name="form1" method="post">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>Contact</td>
        <td><?php echo $row['admin_contact'];?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $row['admin_email'];?></td>
      </tr>
      <tr>
        <td>password</td>
        <td><?php echo $row['admin_password'];?></td>
      </tr>
		<?php   } ?>
    </tbody>
  </table>
</form>

</body>
</html>