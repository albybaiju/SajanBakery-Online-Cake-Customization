<?php
$gender="";
$perc="";
$nmae="";
$dept="";
$total="";
 if(isset($_POST["txt_submit"]))
 {
	 $n1=$_POST["txt_m1"];
	 $n2=$_POST["txt_m2"];
	 $n3=$_POST["txt_m3"];
	 $dep=$_POST["txt_dept"];
	 $total=$n1 + $n2 +$n3;
	 $perc=$total/3 ;
	 $gender=$_POST["radio"];
	 $name=$_POST["txt_fname"];
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
  <table width="286" height="287" border="1">
    <tr>
      <td width="202">First Name</td>
      <td width="352"><label for="txt_fnmae"  ></label>
      <input type="text" name="txt_fname" id="txt_fname"  required /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label for="txt_lname"></label>
      <input type="text" name="txt_lname" id="txt_lname" required /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="radio" type="radio" id="txt_sex" value="m" />
      <label for="txt_sex">male
        <input type="radio" name="radio" id="txt_sex" value="f" />
      female</label></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="txt_dept"></label>
        <select name="txt_dept" id="txt_dept" required>
          <option value="BCA">BCA </option>
          <option value="BBA">BBA</option>
          <option value="B.Com">B.Com</option>
          <option value="BAVA">BAVA</option>
      </select></td>
    </tr>
    <tr>
      <td>Mark 1</td>
      <td><label for="txt_m1"></label>
      <input type="number" name="txt_m1" id="txt_m1" max="100" required /></td>
    </tr>
    <tr>
      <td>Mark 2</td>
      <td><label for="txt_m2"></label>
      <input type="number" name="txt_m2" id="txt_m2" max="100" required/></td>
    </tr>
    <tr>
      <td>Mark 3</td>
      <td><label for="txt_m3"></label>
      <input type="number" name="txt_m3" id="txt_m3" max="100" required /></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><input type="submit" name="txt_submit" id="txt_submit" value="Submit" />
        <input type="reset" name="txt_cancel" id="txt_cancel" value="cancel" /></td>
    </tr>
  </table>
  <p><?php ?></p>
</form>
<form id="form2" name="form2" method="post" action="">
  <table width="289" height="127" border="1">
    <tr>
      <td width="91">Name</td>
      <td width="182">
      <?php
		if($gender=="m")
		{
			echo"MR" ;
			echo"$name";
		}
		if($gender=="f")
		{
			echo"Ms" ;
			echo"$name";
		}
       ?>
      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
      <?php
	  if($gender=="m")
		{
			echo"Male";
		}
	  if($gender=="f")
		{
			echo"Female";
		}
	  ?>
      </td>
    </tr>
    <tr>
      <td>Department</td>
      <td>
      <?php
	  echo"$dept";
	  ?>
      </td>
    </tr>
    <tr>
      <td>Total</td>
      <td>
        <?php
	  echo"$total";
	  ?>
      </td>
    </tr>
    <tr>
      <td>Percentage</td>
      <td>
        <?php
	  echo"$perc";
	  ?>
      </td>
    </tr>
    <tr>
      <td>Grade</td>
      <td>
        <?php
		if($total>200)
		{
	  		echo"Exelent";
		}
		if($total>100 && $total<200)
		{
	  		echo"good ";
		}
		if($total<100&&$total>0)
		{
	  		echo"fail";
		}
		
	  ?>
      </td>
    </tr>
  </table>
</form>
<p><?php ?></p>
</body>
</html>
