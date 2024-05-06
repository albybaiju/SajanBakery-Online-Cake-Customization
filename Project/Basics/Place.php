<?php
	include("../Assets/Connection/Connection.php");
	$district="";
	$pincode="";
	$place="";
	if(isset($_POST["btn_save"]))
	{
		$district=$_POST["ddl_dist"];
		$pincode=$_POST["txt_pincode"];
		$place=$_POST["txt_place"];
		$insqry="INSERT INTO tbl_place(place_name,place_pincode,district_id) VALUES('$place','$pincode','$district')";
		$con->query($insqry);
	}
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		$delquery="DELETE FROM tbl_place WHERE place_id='$id'";
		$con->query($delquery);
		header("location:Place.php");
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
  <table width="504" border="1">
    <tr>
      <td width="153">District</td>
      <td width="335"><label for="ddl_dist"></label>
        <select name="ddl_dist" id="ddl_dist">
        <?php
	$selquery="SELECT* FROM tbl_district";
	$result=$con->query($selquery);
	while($data=$result->fetch_assoc())
	{
	?>
    <option value="<?php echo $data["district_id"];?>"><?php echo $data["district_name"]; ?></option>
	<?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Place name</td>
      <td><label for="txt_place"></label>
      <input type="text" name="txt_place" id="txt_place" /></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="txt_pincode"></label>
      <input type="text" name="txt_pincode" id="txt_pincode" /></td>
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
	  		?></td>- 
      <td><?php
      			echo $data["district_name"];
	  		?></td>
      <td><?php
      			echo $data["place_name"];
	  		?></td>
      <td><?php
      			echo $data["place_pincode"];
	  		?></td>
      
      <td><a href="Place.php?id=<?php echo $data["place_id"] ?>">DELETE</a></td>
    </tr>		
    <?php 
	}
	
	?>
  </table>