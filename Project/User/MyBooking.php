<?php
ob_start();
session_start();
include("Head.php");

include("../Assets/Connection/Connection.php");

$selQry="select * from tbl_booking b inner join tbl_cart c on c.booking_id = b.booking_id inner join  tbl_product p on p.product_id = c.product_id where user_id='".$_SESSION["uid"]."' and booking_status>=1 and cart_status>=1"; 
	$res=$con->query($selQry);

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking</title>
</head>
<style>
.pay_now
{
display: inline-block;
padding: 2px 15px;
font-size: 11px;
font-weight: 300;
color: #fff !important;
background: #05d34e;
-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px;
text-transform: capitalize;
white-space: nowrap;
min-width: 70px;
text-align: center;
}
.pay_now:hover{

  background-color:#4DC11B ;
}
.rev_btn
{
display: inline-block;
padding: 2px 15px;
font-size: 11px;
font-weight: 300;
color: #fff !important;
background:#FFC107 ;
-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px;
text-transform: capitalize;
white-space: nowrap;
min-width: 70px;
text-align: center;
}
.rev_btn:hover{
  background-color:#F0A313 ;

}

</style>

<body>
	<h1>MY BOOKINGS</h1>
	<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
<table border="2">
  <tr>
    <td>SlNo</td>
    <td>Name</td>
    <td>Photo</td>
    <td>Quantity</td>
    <td>Total amount</td>
    <td>Status</td>
  </tr>
      <?php
	  $i=0;
	while($row=$res->fetch_assoc())
	{
		$quantity=$row["cart_quantity"];
		$price=$row["product_price"];
		$totalamount=$quantity*$price;
		$i++;
		
  ?>
   <tr>
	<td><?php echo $i;?></td>
    <td><?php echo $row["product_name"];?></td>
    <td><img src="../Assets/Files/Products/<?php echo $row["product_image"];?>" width="47" /></td>
    <td><?php echo $row["cart_quantity"];?></td>
    <td><?php echo  "$totalamount";?></td>
	<td>
    <?php
                  if($row['cart_status']=="1")
                  {
                    echo "Order Placed";
                  }
                  else if($row['cart_status']=="2")
                  {
                    echo "Order Processing";
                  }
                  else if($row['cart_status']=="3")
                  {
                    echo "Order Ready To Deliver";

                  }
                  else if($row['cart_status']=="4")
                  {
                    echo "Order Delivered";


					?>
          <br>
             <a href="Payment.php?bid=<?php echo  $row['cart_id']; ?>"  class="pay_now">PAY NOW</a>
            

					<?php
                  }
                  else if($row['cart_status']=="5")
                  {
                    echo "<p><font color=green>Payment Completed </p>";
                    ?>

                    <a href="ProductRating.php?pid=<?php echo $row['product_id']; ?>"  class="rev_btn">REVIEW</a>
               <?php
                  } ?>


              



                    </td>
                    
					
       </tr>
<?php
	}

	
	?>
    
</table>

</form>
	</div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>