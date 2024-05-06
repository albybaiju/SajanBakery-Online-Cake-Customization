<?php
	$name=" ";
	$total=0;
	$per=0;
	$grade=" ";
	$gen=" ";
	$fn=" ";
	$ln=" ";
	$m1=0;
	$m2=0;
	$m3=0;
	$dept=" ";
	if(isset($_POST["btn_submit"]))
	{
		$fn=$_POST["txt_fname"];
		$ln=$_POST["txt_lname"];
		$gen=$_POST["rad_gender"];
		$dept=$_POST["ddl_dept"];
		$m1=$_POST["txt_mark1"];
		$m2=$_POST["txt_mark2"];
		$m3=$_POST["txt_mark3"];
		if($gen=="Male")
		{
			$name="Mr ".$fn." ".$ln;
		}
		else
		{
			$name="Ms ".$fn." ".$ln;
		}
		$total=($m1+$m2+$m3);
		$per=(($total/300)*100)."%";
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
  <table width="472" border="1">
    <tr>
      <td width="59">First Name</td>
      <td colspan="2"><label for="txt_fname"></label>
      <input type="text" name="txt_fname" id="txt_fname" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td colspan="2"><label for="txt_lname"></label>
      <input type="text" name="txt_lname" id="txt_lname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td width="59"><input type="radio" name="rad_gender" id="rad_gender" value="Male" />
      <label for="rad_gender">Male</label></td>
      <td width="85"><input type="radio" name="rad_gender" id="rad_gender" value="Female" />
      <label for="rad_gender">Female</label></td>
    </tr>
    <tr>
      <td>Martial</td>
      <td ><input type="radio" name="radio" id="rad_mar" value="rad_mar" />
      <label for="rad_mar">Single</label></td>
      <td ><input type="radio" name="radio" id="rad_mar2" value="rad_mar" />
        Married</td>
    </tr>
    <tr>
      <td>Department</td>
      <td colspan="2"><p>
        <label for="ddl_dept"></label>
        <select name="ddl_dept" id="ddl_dept">
          <option value="">--select--</option>
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="BAVA">BAVA</option>
          <option value="BSC">BSC</option>
        </select>
      </p></td>
    </tr>
    <tr>
      <td><p>Mark 1</p></td>
      <td colspan="2"><label for="txt_mark1"></label>
      <input type="text" name="txt_mark1" id="txt_mark1" /></td>    
    </tr>
    <tr>
      <td>Mark 2</td>
      <td colspan="2"><label for="txt_mark2"></label>
      <input type="text" name="txt_mark2" id="txt_mark2" /></td>
    </tr>
    <tr>
      <td>Mark 3</td>
      <td colspan="2"><label for="txt_mark3"></label>
      <input type="text" name="txt_mark3" id="txt_mark3" /></td>
    </tr>
    <tr>
    <td>Basic Salary</td>
      <td colspan="2"><label for="txt_bs"></label>
      <input type="text" name="txt_bs" id="txt_bs" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="right">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" /> 
        <input type="submit" name="btn_cancel" id="btn_cancel" value="cancel" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="329" border="1">
    <tr>
      <td width="114">Name</td>
      <td width="199"><?php
      					echo $name ;
						?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php
      					echo $gen ;
						?></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><?php
      					echo $dept ;
						?></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><?php
      		echo $total ;
			?></td>
    </tr>
    <tr>
      <td>Percentage</td>
      <td><?php
      		echo $per ;
			?></td>
    </tr>
    <tr>
      <td>Grade</td>
      <td><?php
      		echo $grade ;
			?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>

</form>
</body>
</html>