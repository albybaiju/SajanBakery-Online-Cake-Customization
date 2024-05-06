<?php
include("../Connection/Connection.php");
$selSubcat="select * from tbl_subcategory where category_id=".$_GET['pid'];
$resSub=$con->query($selSubcat);
?>
<option value="">Select Sub-Category</option>
<?php
while($row->$resSub->fetch_assoc())
{
	?>
	<option value="<?php $row['subcategory_id'] ?>"><?php $row['subcategory_name'] ?></option>
    <?php
}
?>