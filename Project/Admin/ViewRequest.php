<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>User Request LIST</title>

</head>
<?php  
	ob_start();
include('../Assets/Connection/Connection.php');
include('Head.php');
      
  if(isset($_GET["sts"]))
  {
    $upQry = "update tbl_request set request_status='".$_GET["sts"]."' where request_id='".$_GET["pid"]."'";
    if($con->query($upQry))
    {
      ?>
        <script>
            window.location="ViewRequest.php";
        </script>
      <?php
    }
  
  }  

    ?>

<body>
  <section class="main_content dashboard_part">

    <!--/ menu  -->
    <div class="main_content_iner ">
      <div class="container-fluid p-0">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="QA_section">
              <h1>USER ORDERS</h1>
              <div class="QA_table mb_30">
                <!-- table-responsive -->
                <table class="table lms_table_active">
                  <thead>
                    <tr style="background-color: #74CBF9">
                      <td align="center" scope="col">SL NO</td>
                      <td align="center" scope="col">USER NAME</td>
                      <td align="center" scope="col">USER EMAIL</td>
                      <td align="center" scope="col">REQUEST DATE</td>
                      <td align="center" scope="col">FOR DATE</td>
                      <td align="center" scope="col">SHAPE</td>
                      <td align="center" scope="col">CATEGORY</td>
                      <td align="center" scope="col">WEIGHT</td>
                      <td align="center" scope="col">ICING</td>
                      <td align="center" scope="col">COLOR</td>
                      <td align="center" scope="col">TOPPING</td>
                      <td align="center" scope="col">STATUS</td>
                      <td align="center" scope="col">DELIVERY ADDRESS</td>
                      <td align="center" scope="col">DETAILS</td>
                      <td align="center" scope="col">DELIVERY TIME</td>
                      <td align="center" scope="col">IMAGE</td>
                      <td align="center" scope="col">CONTACT</td>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php
												                          $i = 0;
                                                $selqry = "SELECT * FROM `tbl_request` r inner join tbl_user u on u.user_id=r.user_id inner join tbl_shape s on s.shape_id=r.shape_id inner join tbl_category c on c.category_id=r.category_id where request_status>=0";
                                                $res=$con->query($selqry);
                                                while($data=$res->fetch_assoc())
                                                {

                                                    $i++;

                                            ?>
                    <tr>
                      <td>
                        <?php echo $i; ?>
                      </td>
                      <td>
                        <?php echo $data["user_name"]; ?>
                      </td>
                      <td>
                        <?php  echo $data["user_email"]; ?>
                      </td>
                      <td>
                        <?php echo $data['request_date'] ?>
                      </td>
                      <td>
                        <?php echo $data['request_fordate'] ?>
                      </td>
                      <td>
                        <?php echo $data['shape_name'] ?>
                      </td>
                      <td>
                        <?php echo $data['category_name'] ?>
                      </td>
                      <td>
                        <?php echo $data['request_kg'] ?>
                      </td>
                      <td>
                        <?php 
          if($data['icing_id']!=0)
          {
            $selIce="SELECT * FROM `tbl_icing` where icing_id ='".$data['icing_id']."'";
		        $resIce=$con->query($selIce);
		        $dataIce=$resIce->fetch_assoc();
            echo $dataIce["icing_name"];
          }
          else{
            echo "Complementary";
          }
        ?>
                      </td>
                      <td>
                        <?php 
          if($data['color_id']!=0)
          {
            $selCol="SELECT * FROM `tbl_color` where color_id='".$data['color_id']."'";
		        $resCol=$con->query($selCol);
		        $dataCol=$resCol->fetch_assoc();
            echo $dataCol["color_name"];
          }
          else{
            echo "Complementary";
          }
        ?>
                      </td>
                      <td>
                        <?php 
          if($data['topping_id']!=0)
          {
            $selTop="SELECT * FROM `tbl_topping` where topping_id='".$data['topping_id']."'";
		        $resTop=$con->query($selTop);
		        $dataTop=$resTop->fetch_assoc();
            echo $dataTop["topping_name"];
          }
          else{
            echo "Complementary";
          }
        ?>
                      </td>
                      <td>
                      <?php
                            if($data['request_status']=="0")
                            {
                              ?>
                               Order Placed / <a href="ViewRequest.php?pid=<?php echo $data["request_id"]?>&sts=2" class="status_btn">Process</a>
                              <?php
                            }
                            else if($data['request_status']=="2")
                            {
                              ?>
                               Order Processing / <a href="ViewRequest.php?pid=<?php echo $data["request_id"]?>&sts=3" class="status_btn">Process Completed</a>
                              <?php
                            }
                            else if($data['request_status']=="3")
                            {
                              ?>
                               Order Ready To Deliver / <a href="ViewRequest.php?pid=<?php echo $data["request_id"]?>&sts=4" class="status_btn">Order Delivered</a>
                              <?php
                            }
                            else if($data['request_status']=="4")
                            {
                              ?>
                               <p>Order Delieverd /</p><p style="color: red;"> Payment Pending</p>
                              <?php


                            }
                              
                            else if($data['request_status']=="1")
                            {
                    
                              echo "<p> <font color=green> Payment Completed </p>";
                              
                            }

                        ?> 

                      </td>
                      <td>
                        <?php echo $data['delivery_location'] ?>
                      </td>
                      <td>
                        <?php 
        if($data['request_details']==0)
        {
          echo "Nothing Default";
        }
        else
        {
          echo $data['request_details'];
        } 
        ?>
                      </td>
                      <td>
                        <?php echo $data['delivery_time'] ?>
                      </td>
                      <td>
                        <?php
            if($data['request_image']=="Image Not Found")
            {
                echo "Image Not Found";
            }
            else{
              ?>
                        <a href="../Assets/Files/Request/<?php echo $data['request_image'] ?>" target="_blank">
                          <img src="../Assets/Files/Request/<?php echo $data['request_image'] ?>" width="80"
                            height="80" />
                        </a>
                        <?php
            }
          ?>
                      </td>
                      <td>
                        <?php echo $data['delivery_contact'] ?>
                      </td>
                     

                    </tr>
                    <?php                     }


                                            ?>

                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>
<?php
		include('Foot.php');
		 ob_end_flush();
		?>

</html>