 <?php
 include("../Assets/Connection/Connection.php");
 $category="";
 if(isset($_POST["btn_save"]))
 {
	$category=$_POST["txt_catn"];
	$insqry="INSERT INTO tbl_category(category_name)  VALUES('$category')";
	$con->query($insqry);
 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	$delquery="DELETE FROM tbl_category WHERE category_id='$id'";
	$con->query($delquery);
	header("location:category.php");
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
  <table width="333" border="1">
    <tr>
      <td width="116">Category name</td>
      <td width="201"><label for="txt_catn"></label>
      <input type="text" name="txt_catn" id="txt_catn" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="btn_save" id="btn_save" value="save" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="cancel" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>Slno</td>
      <td>Category</td>
      <td>Action</td>
    </tr>
   <?php
   	$i=0;
   	$selquery="SELECT* FROM tbl_category";
	$result=$con->query($selquery);
	while($data=$result->fetch_assoc())
	{
		$i++;
		?>	
		<tr>
      <td><?php
      		echo $i;
			?></td>
      <td><?php
      		echo $data["category_name"];
			?></td>
      <td><a href="http://localhost/MiniProject/Project/Admin/Category.php?id=<?php echo $data["category_id"]?>">Delete</a></td>
    </tr>
	<?php
	}
   	?>
  </table>
  <p>&nbsp;</p>
</form>
t
</body>
</html>