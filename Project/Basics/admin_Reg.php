<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
	<table width="200" border="1">
  <tbody>
    <tr>
      <td width="74">Name</td>
      <td width="110">
      <input type="text" name="admin_name" id="admin_name" reqiured ></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td>
      <input type="number" name="admin_contact" id="admin_contact" required ></td>
    </tr>
    <tr>
      <td>Email id</td>
      <td><input type="email" name="admin_email" id="admin_email" required ></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="admin_password" id="admin_password" required></td>
    </tr>
    <tr>
      <td height="48" colspan="2"><input type="submit" name="btn_save" id="btn_save" value="Submit">        <input type="reset" name="btn_reset" id="btn_reset" value="Reset"></td>
      </tr>
	  
  </tbody>
</table>
</form>

</body>
</html>
<?php
	include("../assets/connection/connection.php");
	if(isset($_POST["btn_save"]))
	{
		
		$query="insert into tbl_admin (admin_name,admin_contact,admin_email,admin_password) values('".$_POST["admin_name"]."','".$_POST["admin_contact"]."','".$_POST["admin_email"]."','".$_POST["admin_password"]."')";
		$con->query($query);
	}
	
?>