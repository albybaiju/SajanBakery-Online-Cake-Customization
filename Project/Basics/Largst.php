<?php
	Echo "Largest and smallest of three numbers";
	$largest=" ";
	$smallest=" ";
	if(isset($_POST["btn_find"]))
	{
		$n1=$_POST["txt_num1"];
		$n2=$_POST["txt_num2"];
		$n3=$_POST["txt_num3"];	
		if(($n1>$n2)&&($n1>$n3))
		{
		$largest=$n1;
		}
		else if(($n2>$n1)&&($n2>$n3))
		{
		$largest=$n2;
		}
		else if(($n3>$n1)&&($n3>$n2))
		{
		$largest=$n3;
		}
		if(($n1<$n2)&&($n1<$n3))
		{
		$smallest=$n1;
		}
		else if(($n2<$n1)&&($n2<$n3))
		{
		$smallest=$n2;
		}
		else if(($n3<$n1)&&($n3<$n2))
		{
		$smallest=$n3;
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
      <td width="98">Number 1</td>
      <td width="86"><label for="txt_num1"></label>
      <input type="text" name="txt_num1" id="txt_num1" /></td>
    </tr>
    <tr>
      <td>Number 2</td>
      <td><label for="txt_num2"></label>
      <input type="text" name="txt_num2" id="txt_num2" /></td>
    </tr>
    <tr>
      <td>Number 3</td>
      <td><label for="txt_num3"></label>
      <input type="text" name="txt_num3" id="txt_num3" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="btn_find" id="btn_find" value="Find" />    
      </div></td>
    </tr>
    <tr>
      <td>Largest</td>
      <td><?php
      		echo $largest;
			?></td>
    </tr>
    <tr>
      <td>Smallest</td>
      <td><?php
      		echo $smallest;
			?>	</td>
    </tr>
  </table>
</form>
</body>
</html>