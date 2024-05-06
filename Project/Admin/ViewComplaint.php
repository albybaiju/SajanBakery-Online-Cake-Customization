<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEW COMPLAINT</title>

</head>
    <?php  
    
	ob_start();
    // $e="";
    

include('../Assets/Connection/Connection.php');
include('Head.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    require '../Assets/phpMail/src/Exception.php';
    require '../Assets/phpMail/src/PHPMailer.php';
    require '../Assets/phpMail/src/SMTP.php';


      
    if(isset($_POST["btn_save"])) {
       
        $sery = "select * from tbl_complaint c inner join tbl_user u on c.user_id = u.user_id where complaint_id='".$_POST["hid"]."'";
        $rs=$con->query($sery);
        $d= $rs->fetch_assoc();
       $e=$d['user_email'];

            $upQry = "update tbl_complaint set complaint_reply='".$_POST["txt_reply"]."',complaint_status='1' where complaint_id='".$_POST["hid"]."'";
            if($con->query($upQry))
            {
                $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sajanbakery43@gmail.com'; // Your gmail
        $mail->Password = 'mavnpecwrxteejzu'; // Your gmail app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
    
        $mail->setFrom('sajanbakery43@gmail.com'); // Your gmail
    
        $mail->addAddress($e);  
    
        $mail->isHTML(true);
    
        $mail->Subject = "Sajan Bakery Replied to your complaint";
        $mail->Body = $_POST["txt_reply"];
        if($mail->send())
        {
        echo "Sended";
        }
        else
        {
        echo "Failed";
        }
           header("Location:ViewComplaint.php");
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
                                <!--Form-->
                                <?php                          
								         if (isset($_GET["up"])) {
                                ?>

                                <div class="white_box_tittle list_header">
                                    <div class="col-lg-12">
                                        <div class="white_box mb_30">
                                            <div class="box_header ">
                                                <div class="main-title">
                                                    <h3 class="mb-0" >Send Reply</h3>
                                                </div>
                                            </div>
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="txt_district">Reply</label>
                                                    <input required="" type="text" class="form-control" id="txt_reply" name="txt_reply">
                                                    <input type="hidden" name="hid" value="<?php echo $_GET["up"];?>">
                                                </div>
                                                <div class="form-group" align="center">
                                                    <input type="submit" class="btn-dark" style="width:100px; border-radius: 10px 5px " name="btn_save" value="Save">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    }


                                ?>
                                <h1>New Complaints</h1>
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">SL.NO</td>
                                                <td align="center" scope="col">COMPLAINT</td>
                                                <td align="center" scope="col">USER</td>
                                                <td align="center" scope="col">USER EMAIL</td>
                                                <td align="center" scope="col">DATE</td>
                                                <td align="center" scope="col">ACTION</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                               
												$i = 0;
                                                $selQry = "select * from tbl_complaint c inner join tbl_user u on c.user_id = u.user_id where complaint_status='0'";
                                               $rs = $con->query($selQry);
                                                while ($data = $rs->fetch_assoc()) {

                                                    $i++;

                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data["complaint_content"] ?></td>
                                                <td align="center"><?php echo $data["user_name"] ?></td>
                                                <td align="center"><?php echo $data["user_email"] ?></td>
                                                <td align="center"><?php echo $data["complaint_date"] ?></td>
                                                <td align="center"><a href="ViewComplaint.php?up=<?php echo $data["complaint_id"] ?>" class="status_btn">Reply</a> </td>
                                            </tr>
                                            <?php                     
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <h1>Replyed Complaints</h1>
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">SL.NO</td>
                                                <td align="center" scope="col">COMPLAINT</td>
                                                <td align="center" scope="col">USER</td>
                                                <td align="center" scope="col">USER EMAIL</td>
                                                <td align="center" scope="col">DATE</td>
                                                <td align="center" scope="col">REPLY</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
												$i = 0;
                                                $selQry = "select * from tbl_complaint c inner join tbl_user u on c.user_id = u.user_id where complaint_status='1'";
                                               $rs = $con->query($selQry);
                                                while ($data = $rs->fetch_assoc()) {

                                                    $i++;

                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data["complaint_content"] ?></td>
                                                <td align="center"><?php echo $data["user_name"] ?></td>
                                                <td align="center"><?php echo $data["user_email"] ?></td>
                                                <td align="center"><?php echo $data["complaint_date"] ?></td>
                                                <td align="center"><?php echo $data["complaint_reply"] ?></td>

                                            </tr>
                                            <?php                   }
                                                
                                                

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