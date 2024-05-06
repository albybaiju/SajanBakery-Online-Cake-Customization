<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_POST['btn_sr']))
{
	$user=$_SESSION['uid'];
	$date=$_POST['date_date'];
	$shape=$_POST['slct_shape'];
	$category=$_POST['slct_category'];
  $weight=$_POST['slct_weight'];
	$da=$_POST['txt_da'];
	$time=$_POST['time_time'];
	$contact=$_POST['txt_cntct'];
  $total = $_POST["totalText"];
	
  $color=0;
  if($_POST['slct_color']!="")
  {
    $color = $_POST['slct_color'];
  }
  $topping=0;
  if($_POST['slct_topping']!="")
  {
    $topping = $_POST['slct_topping'];
  }
  $details=0;
  if($_POST['txt_details']!="")
  {
    $details = $_POST['txt_details'];
  }
  $icing=0;
  if($_POST['slct_icing']!="")
  {
    $icing = $_POST['slct_icing'];
  }

  $photo = "Image Not Found";
  if($_FILES['file_img']['name']!="")
  {
    $photo=$_FILES['file_img']['name'];
	  $temp=$_FILES['file_img']['tmp_name'];
	  move_uploaded_file($temp,"../Assets/Files/Request/".$photo);
  }
  

	$insqry="INSERT INTO `tbl_request`( `request_date`, `request_details`, `request_image`, `delivery_location`,`delivery_time`, `delivery_contact`, `request_kg`, `shape_id`, `category_id`, `icing_id`, `color_id`, `topping_id`,`user_id`, `request_fordate`, `request_amount`)values(curdate(),'$details','$photo','$da','$time','$contact','$weight','$shape','$category','$icing','$color','$topping','$user','$date','$total')";
	if($con->query($insqry))
  {
    $selQry = "select max(request_id) as id from tbl_request";
    $res=$con->query($selQry);
		$data=$res->fetch_assoc();

    ?>
    <script>
      alert("Request Sended");
      window.location="ViewRequest.php";
    </script>
    <?php
  }
  else{
    ?>
      <script>
        alert("Failed");
        window.location="SendRequest.php";
      </script>
    <?php
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEND REQUEST</title>
<style>
  sup{
    color: red;
  }
</style>
</head>
<?php
include("Head.php");
?>
<body>

<h1>CUSTOMIZE YOUR CAKE</h1><br>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="653" height="636" border="1">
    <tr>
      <th width="200" scope="row">
        DELIVERY DATE
        <sup>*</sup>
      </th>
      <td width="437"><label for="date_date"></label>
      <input type="date" name="date_date" required id="date_date" /></td>
    </tr>
    <tr>
      <th scope="row">SHAPE<sup>*</sup></th>
      <td><label for="slct_shape"></label>
        <select name="slct_shape" id="slct_shape" required>
        <option value="">---select---</option>
        <?php 
		$selqry="select * from tbl_shape";
		$res=$con->query($selqry);
		while($data=$res->fetch_assoc())
		{
		?>
        <option value="<?php echo $data['shape_id'];?>"> <?php echo $data['shape_name'];?></option>
        <?php } ?>
      </select></td>
      
    </tr>
    <tr>
      <th scope="row">CATEGORY<sup>*</sup></th>
      <td><label for="slct_category"></label>
        <select name="slct_category" id="slct_category" required onChange="checkPrice()">
        <option value="">---select---</option>
			
        <?php 
		$selqry="select * from tbl_category";
		$res=$con->query($selqry);
		while($data=$res->fetch_assoc())
		{
		?>
        <option value="<?php echo $data['category_id'];?>"> <?php echo $data['category_name'];?>(<?php echo $data['category_price'];?>/KG)</option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">ICING</th>
      <td><label for="slct_icing"></label>
        <select name="slct_icing" id="slct_icing" onChange="checkPrice()">
         <option value="">---select---</option> 
		 <?php 
		$selqry="select * from tbl_icing";
		$res=$con->query($selqry);
		while($data=$res->fetch_assoc())
		{
		?>
        <option value="<?php echo $data['icing_id'];?>"> <?php echo $data['icing_name'];?>(<?php echo $data['icing_price'];?>)</option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">COLOR</th>
      <td><label for="slct_color"></label>
        <select name="slct_color" id="slct_color">
         <option value="">---select---</option>
          <?php 
		$selqry="select * from tbl_color";
		$res=$con->query($selqry);
		while($data=$res->fetch_assoc())
		{
		?>
        <option value="<?php echo $data['color_id'];?>"> <?php echo $data['color_name'];?></option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">TOPPING</th>
      <td><label for="slct_topping"></label>
        <select name="slct_topping" id="slct_topping"  onChange="checkPrice()">
         <option value="">---select---</option>
          <?php 
		$selqry="select * from tbl_topping";
		$res=$con->query($selqry);
		while($data=$res->fetch_assoc())
		{
		?>
        <option value="<?php echo $data['topping_id'];?>"> <?php echo $data['topping_name'];?>(<?php echo $data['topping_price'];?>)</option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">WEIGHT (in Kgs)<sup>*</sup></th>
      <td><label for="slct_weight"></label>
        <select name="slct_weight" id="slct_weight" required onChange="checkPrice()">
        <option value="">---select---</option>
        <option value="0.5">0.5</option>
        <option value="1.0">1.0</option>
        <option value="1.5">1.5</option>
        <option value="2.0">2.0</option>
        <option value="2.5">2.5</option>
        <option value="3.0">3.0</option>
        <option value="3.5">3.5</option>
        <option value="4.0">4.0</option>
        <option value="4.5">4.5</option>
        <option value="5.0">5.0</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">DELIVERY ADDRESS<sup>*</sup></th>
      <td><label for="txt_da"></label>
      <textarea name="txt_da" id="txt_da" cols="45" required rows="5"></textarea></td>
    </tr>
    <tr>
      <th scope="row">DETAILS</th>
      <td><label for="txt_details"></label>
      <textarea name="txt_details" id="txt_details" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th scope="row">DELIVERY TIME<sup>*</sup></th>
      <td><label for="time_time"></label>
      <input type="time" name="time_time" required id="time_time" /></td>
    </tr>
    <tr>
      <th scope="row">TOPPING IMAGE</th>
      <td><label for="file_img"></label>
      <input type="file" name="file_img" id="file_img" /></td>
    </tr>
    <tr>
      <th scope="row">CONTACT<sup>*</sup></th>
      <td><p>
        <label for="txt_cntct"></label>
        <input type="text" name="txt_cntct"  id="txt_cntct"  required pattern="[0-9]{10}" title="Contact Number should only contain 10 numbers"/>
      </p></td>
    </tr>
    <tr>
      <th colspan="2" scope="row">
      <input type="submit" name="btn_sr" id="btn_sr" value="ORDER" />
      <span id="totalAmount" align="right"></span>
      <input type="hidden" name="totalText" id="totalText" />

    </th>
    </tr>
  </table>
  
</form>
</body>
</html>
<script src="../Assets/JQ/jQuery.js"></script>
 <script>    

function checkPrice()
{
	var category = document.getElementById("slct_category").value;
  var icing = document.getElementById("slct_icing").value;
  var topping = document.getElementById("slct_topping").value;
  var weight = document.getElementById("slct_weight").value;


  $.ajax({
		url:"../Assets/AjaxPages/AjaxPrice.php?category="+category+"&icing="+icing+"&topping="+topping+"&weight="+weight,
		success: function(a){
      if(a.trim()!=="")
      {
        document.getElementById("totalAmount").innerHTML = "Total Amount ="+ a; 
        document.getElementById("totalText").value = a; 
      }
		}
	});
}

</script>
<script>
    $(function () {
       // console.log("haii")
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;


        console.log(maxDate);
        $('#date_date').attr('min', maxDate);
    });
</script>
<?php
include("Foot.php");
?>