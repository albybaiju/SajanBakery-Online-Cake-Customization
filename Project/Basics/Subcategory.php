<?php
	include("../Assets/Connection/Connection.php");
	if(isset($_POST["btn_save"]))
	{
		$category=$_POST["ddl_cat"];
		$subcategory=$_POST["txt_name"];
		$insqry="INSERT INTO tbl_subcategory(category_id,subcategory_name) VALUES('$category',''$subcategory')";
		$con->query($insqry);
		
	}
	if(isset($_GET["id"]))      
	{
		$id=$_GET["id"];
		$delquery="DELETE FROM tbl_district WHERE district_id='$id'";
		$con->query($delquery);
		header("location:District.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untimmt</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="409" border="1">
    <tr>
      <td width="172">Category</td>
      <td width="221"><label for="ddl_cat"></label>
        <select name="ddl_cat" id="ddl_cat">
      </select></td>
    </tr>
    <tr>
      <td>Subcategory name</td>
      <td><label for="txt_subn"></label>
      <input type="text" name="txt_subn" id="txt_subn" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="btn_save" id="btn_save" value="save" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="cancel" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

<table width="317" border="1">
    <tr>
      <td width="54">Sl.no</td>
      <td width="164">District</td>
      <td width="164">Place name</td>
      <td width="164">Pincode</td>
      <td width="77">Action</td>
    </tr>
    <?php
	$i=0;
	$selquery="SELECT* FROM tbl_place p inner join tbl_district d on p.district_id=d.district_id";
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
      <td><?php
      			echo $data[""];
	  		?></td>
      <td><?php
      			echo $data["place_pincode"];
	  		?></td>
      
      <td><a href="../Admin/Place.php?id=<?php echo $data["place_id"] ?>">DELETE</a></td>
    </tr>		
    <?php 
	}
	
	?>
  </table>