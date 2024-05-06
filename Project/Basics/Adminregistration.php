<?php
	include("../Assets/Connection/Connection.php");
	$admin="";
	$contact="";
	$email="";
	$password="";
	if(isset($_POST["btn_save"]))
	{
		$admin=$_POST["txt_name"];
		$password=$_POST["txt_password"];
		$contact=$_POST["txt_contact"];
		$email=$_POST["txt_email"];
		$insqry="INSERT INTO tbl_admin(admin_name,admin_contact,admin_email,admin_password) VALUES('$admin','$contact','$email','$password')";
		$con->query($insqry); 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" height="300" border="1">
    <tr>
      <td width="168">Admin name</td>
      <td width="316"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="btn_save" id="btn_save" value="Save" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>