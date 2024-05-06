<?php
$name="";
$gender="";
$dep="";
$tot=0;
$per=0;
$grade="";
if(isset($_POST["btn_sub"]))
{
	$fname=$_POST["txt_fname"];
	$lname=$_POST["txt_lname"];
	$gender=$_POST["rad_gender"];
	$dep=$_POST["txt_dep"];
	$m1=$_POST["txt_m1"];
	$m2=$_POST["txt_m2"];
	$m3=$_POST["txt_m3"];
	
	if($gender=="male")
	{
		$name="Mr ".$fname." ".$lname;
	}
	else
	{
		$name="Miss ".$fname." ".$lname;
	}
	$tot=($m1+$m2+$m3);
	$per=(($tot/300)*100)."%";
	
	if($per>=90)
	{
		$grade="A+";
	}
	else if($per>=80)
	{
		$grade="A";
	}
	else if($per>=70)
	{
		$grade="B+";
	}
	else
	{
		$grade="B";
	}
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
  <table width="200" border="1">
    <tr>
      <td width="92">First Name</td>
      <td width="92"><label for="txt_fname"></label>
      <input type="text" name="txt_fname" id="txt_fname" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label for="txt_lname"></label>
      <input type="text" name="txt_lname" id="txt_lname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="rad_gender" id="rad_gender" value="male" />
      <label for="rad_male">Male
        <input type="radio" name="rad_gender" id="rad_gender" value="female" />
      Female</label></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="txt_dep"></label>
      <input type="text" name="txt_dep" id="txt_dep" /></td>
    </tr>
    <tr>
      <td>Mark 1</td>
      <td><label for="txt_m1"></label>
      <input type="text" name="txt_m1" id="txt_m1" /></td>
    </tr>
    <tr>
      <td>Mark 2</td>
      <td><label for="txt_m2"></label>
      <input type="text" name="txt_m2" id="txt_m2" /></td>
    </tr>
    <tr>
      <td>Mark 3</td>
      <td><label for="txt_m3"></label>
      <input type="text" name="txt_m3" id="txt_m3" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_sub" id="btn_sub" value="Submit" />
      <input type="submit" name="btn_reset" id="btn_reset" value="Reset" /></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td width="103">Name</td>
      <td width="81">
	  <?php
      		echo $name;
		?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php
      		echo $gender;
		?></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><?php
      		echo $dep;
		?></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><?php
      		echo $tot;
			?></td>
    </tr>
    <tr>
      <td>Mark %</td>
      <td><?php echo $per?></td>
    </tr>
    <tr>
      <td>Grade</td>
      <td><?php echo $grade?></td>
    </tr>
  </table>
</form>
</body>
</html>