<?php
include("../Connection/Connection.php");

  $category = 0;
  $icing = 0;
  $topping = 0;
  $weight = $_GET["weight"];



  if(isset($_GET["category"]))
  {

    $selCat = "select * from tbl_category where category_id='".$_GET["category"]."'";
    $resultCat=$con->query($selCat);
	if($rowCat=$resultCat->fetch_assoc())
	{
        $category = $rowCat["category_price"];
    }

  }
  if(isset($_GET["icing"]))
  {
    $selIce = "select * from tbl_icing where icing_id='".$_GET["icing"]."'";
    $resultIce=$con->query($selIce);
	if($rowIce=$resultIce->fetch_assoc())
	{
        $icing = $rowIce["icing_price"];
    }

  }
  if(isset($_GET["topping"]))
  {
    $selTop = "select * from tbl_topping where topping_id='".$_GET["topping"]."'";
    $resultTop=$con->query($selTop);
	if($rowTop=$resultTop->fetch_assoc())
	{
        $topping = $rowTop["topping_price"];
    }

  }
$total = "";

  if($category!=0 && $weight!="")
  {

    $total =((int) $category +(int) $topping +(int) $icing )*(float) $weight;

  }
  echo $total;
?>
