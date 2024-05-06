<?php
	include("../Assets/Connection/Connection.php");
	$district="";
	if(isset($_POST["btn_save"]))
	{
		$district=$_POST["txt_dist"];
		$insqry="INSERT INTO tbl_district(district_name) VALUES('$district')";
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
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="307" border="1">
    <tr>
      <td width="112">District Name</td>
      <td width="179"><label for="txt_dist"></label>
      <input type="text" name="txt_dist" id="txt_dist" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="btn_save" id="btn_save" value="save" /> 
        <input type="submit" name="btn_cancel" id="btn_cancel" value="cancel" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="317" border="1">
    <tr>
      <td width="54">Sl.no</td>
      <td width="164">District</td>
      <td width="77">Action</td>
    </tr>
    <?php
	$i=0;
	$selquery="SELECT* FROM tbl_district";
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
      			echo $data["district_name"];
	  		?></td>
      <td><a href="District.php?id=<?php echo $data["district_id"] ?>">DELETE</a></td>
    </tr>		
    <?php 
	}
	
	?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>