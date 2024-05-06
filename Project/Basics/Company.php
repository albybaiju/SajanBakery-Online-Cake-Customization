<?php
$gender="";
$name="";
$mar_stat="";
$dep="";
$b_sal=0;
$da=0;
$ded=0;
$hra=0;
$lic=0;
$pf=0;
$ta=0;
$net=0;
if(isset($_POST["btn_submit"]));
{
	$fname=$_POST["txt_fname"];
	$lname=$_POST["txt_lname"];
	$gender=$_POST["rad_gender"];
	$mar=$_POST["rad_mar"];
	$dep=$_POST["drop_dep"];
	$b_sal=$_POST["txt_bsal"];
	if($gender=="male")
	{
		$name="Mr ".$fname." ".$lname;
	}
	if($gender=="female")
	{
		$name="Mis ".$fname." ".$lname;
	}
	if($mar=="single")
	{
		$mar_stat="Single";
	}
	if($mar=="married")
	{
		$mar_stat="Married";
	}
	if($b_sal>="10000")
	{
		$ta=($b_sal*40)/100;
		$da=($b_sal*35)/100;
		$hra=($b_sal*30)/100;
		$lic=($b_sal*25)/100;
		$pf=($b_sal*20)/100;
	}
	else if(($b_sal>=5000)&&($b_sal<=10000))
	{
		$ta=($b_sal*35)/100;
		$da=($b_sal*30)/100;
		$hra=($b_sal*25)/100;
		$lic=($b_sal*20)/100;
		$pf=($b_sal*15)/100;
	}
	else
	{
		$ta=($b_sal*30)/100;
		$da=($b_sal*25)/100;
		$hra=($b_sal*20)/100;
		$lic=($b_sal*15)/100;
		$pf=($b_sal*10)/100;
	}
	$ded=$lic+$pf;
	$net=$b_sal+$ta+$da+$hra-($lic+$pf);;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="504" border="1">
    <tr>
      <td width="172">First name</td>
      <td width="316"><label for="txt_fname"></label>
      <input type="text" name="txt_fname" id="txt_fname" /></td>
    </tr>
    <tr>
      <td>Last name</td>
      <td><label for="txt_lname"></label>
      <input type="text" name="txt_lname" id="txt_lname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="rad_gender" id="rad_gender" value="male" />
      <label for="rad_gender">Male
        <input type="radio" name="rad_gender" id="rad_gender" value="Female" />
      Female</label></td>
    </tr>
    <tr>
      <td>Maritial</td>
      <td><input type="radio" name="rad_mar" id="rad_mar" value="single" />
      <label for="rad_mar">Single
        <input type="radio" name="rad_mar" id="rad_mar" value="married" />
        Married</label></td>
    </tr>
    <tr>
      <td height="41">Department </td>
      <td><label for="drop_dep"></label>
        <select name="drop_dep" id="drop_dep">
          <option>BCA</option>
          <option>Bcom</option>
          <option>BAVA</option>
          <option>BBA</option>
          <option>MBA</option>
          <option>Barc</option>
      </select></td>
    </tr>
    <tr>
      <td>Basic salary </td>
      <td><label for="txt_bsal"></label>
      <input type="text" name="txt_bsal" id="txt_bsal" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <a href="Company.php"><input type="submit" name="btn_reset" id="btn_reset" value="Cancel" /></a></td>
    </tr>
  </table>
  <table width="506" border="1">
    <tr>
      <td width="172">Name </td>
      <td width="318"><?php echo $name ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $gender ?></td>
    </tr>
    <tr>
      <td>Maritial</td>
      <td><?php echo $mar_stat ?></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><?php echo $dep ?></td>
    </tr>
    <tr>
      <td>Basic salary</td>
      <td><?php echo $b_sal ?></td>
    </tr>
    <tr>
      <td>T.A</td>
      <td><?php echo $ta ?></td>
    </tr>
    <tr>
      <td>D.A</td>
      <td><?php echo $da ?></td>
    </tr>
    <tr>
      <td>HRA</td>
      <td><?php echo $hra ?></td>
    </tr>
    <tr>
      <td>LIC</td>
      <td><?php echo $lic ?></td>
    </tr>
    <tr>
      <td>P.F</td>
      <td><?php echo $pf ?></td>
    </tr>
    <tr>
      <td>Deduction </td>
      <td><?php echo $ded ?></td>
    </tr>
    <tr>
      <td>NET</td>
      <td><?php echo $net ?></td>
    </tr>
  </table>
</form>
</body>
</html>