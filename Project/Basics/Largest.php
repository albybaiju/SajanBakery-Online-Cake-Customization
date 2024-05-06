<?php 
$l="";
$s="";
 if(isset($_POST["btn_find"]))
 {
	 $a=$_POST["txt_1"];
	 $b=$_POST["txt_2"];
	 $c=$_POST["txt_3"];
	 $l=max($a,$b,$c);
	 $s=min($a,$b,$c); 
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
  <table width="258" border="1">
    <tr>
      <td width="102">Number 1</td>
      <td width="144"><label for="txt_1"></label>
      <input type="text" name="txt_1" id="txt_1" /></td>
    </tr>
    <tr>
      <td>Number 2</td>
      <td><label for="txt_2"></label>
      <input type="text" name="txt_2" id="txt_2" /></td>
    </tr>
    <tr>
      <td>Number 3</td>
      <td><label for="txt_3"></label>
      <input type="text" name="txt_3" id="txt_3" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_find" id="btn_find" value="find" /></td>
    </tr>
    <tr>
      <td>largest</td>
      <td>
      	<?php
			echo "$l";
		?>
      </td>
    </tr>
    <tr>
      <td>samllest</td>
      <td>
      	<?php
			echo "$s";
		?>
      </td>
    </tr>
   </table>
</form>
</body>
</html>