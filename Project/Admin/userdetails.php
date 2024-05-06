
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>User details</title>

  <style>
   
   .sb{
    padding:30px;
    background-color: #FFFFFF;
    border-bottom-color: #ff0000;
    border-collapse: separate;
 
    border-spacing: 40px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    height: 50px;
    /* position:absolute;top: 160px; right: 50px;
     */
   
}




   .user_detailsb{
    padding:30px;
    background-color: #FFFFFF;
    border-collapse: separate;
 
    border-spacing: 40px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    height: 50px;
    
   
}



.deletebtn{
    display: inline-block;
    padding: 2px 15px;
    font-size: 15px;
    font-weight: 300;
    color: #fff !important;
    background: #ff0000;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    text-transform: capitalize;
    white-space: nowrap;
    min-width: 70px;
    text-align: center;

}
   


.sendbtn{
    display: inline-block;
    padding: 2px 15px;
    font-size: 15px;
    font-weight: 300;
    color: #fff !important;
    background: #000000;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 50px;
    text-transform: capitalize;
    white-space: nowrap;
    min-width: 70px;
    text-align: center;
}

  </style>

</head>

<?php
include('../Assets/Connection/Connection.php');
include('Head.php');



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    require '../Assets/phpMail/src/Exception.php';
    require '../Assets/phpMail/src/PHPMailer.php';
    require '../Assets/phpMail/src/SMTP.php';







$selqry="select * from tbl_user where user_id='".$_GET["id"]."'";
$res=$con->query($selqry);
$data=$res->fetch_assoc();
$em="";
$name="";
$em=$data['user_email']; 
$name=$data['user_name'];


if(isset($_POST['submit']))
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

    $mail->addAddress($em);  

    $mail->isHTML(true);

    $mail->Subject = "Sajan bakery admin sended a message";
    $mail->Body = $_POST['txt_msg'];
    if($mail->send())
    {
        ?>
        <script>

             alert("Message sended")
          </script>

<?php
    }
    else
    {
    echo "Failed";
    }
         




}


if(isset($_POST['btn']))
{    
          
    

   $delete="delete from tbl_user where user_id='".$_GET["id"]."'";
   if($con->query($delete))
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
    
        $mail->addAddress($em);  
    
        $mail->isHTML(true);
    
        $mail->Subject = "Your Account is deleted";
        $mail->Body = "Mr/Ms $name your Account in Sajanbakery is terminated because you violeted some of our terms and conditions.";
        if($mail->send())
        {
            ?>
            <script>
  
                 alert("User deleted")
                 window.location="HomePage.php";
              </script>
  
  <?php
        }
        else
        {
        echo "Failed";
        }
              

 


       }


}



?>
<body>
<h2 align="center">User Details</h2>

<form method="post" name="frm1">
 <table border="0" align="center" class="user_detailsb" >
   

     
 <tr>
            <td>PHOTO</td>
            <td><img src="../Assets/Files/User/<?php echo $data["user_image"] ?>" alt="" width=150 height=150 ></td>

    </tr>
    
 
    <tr>
            <td> NAME</td>
            <td><?php echo $data["user_name"]; ?></td>

    </tr>

    <tr>
            <td> EMAIL </td>
            <td><?php echo $data["user_email"]; ?></td>

    </tr>

    <tr>
            <td> CONTACT</td>
            <td><?php echo $data["user_contact"]; ?></td>

    </tr>

    <tr>
            <td> GENDER</td>
            <td><?php echo $data["user_gender"]; ?></td>
        
    </tr>


    <tr>
            <td> DELIVERY ADDRESS</td>
            <td><?php echo $data["user_deliveryaddress"]; ?></td>

    </tr>

    <tr>

          <td align="center" colspan="2"><a href="userdetails.php?id=<?php echo $data['user_id']?>"><input type="submit" name="btn" id="btn" value="DELETE USER"  class="deletebtn"></a></td>

    </tr>


 </table>
 <br><br>
</form>
 <form method="post" action="" name="frm2">
 <table align="center" class="sb">

    <tr>
      <td>Send Message</td>

      <td><textarea name="txt_msg" id="txt_msg" placeholder="Enter the message" cols="30" rows="5" autocomplete="off"></textarea></td>


</tr>
<tr >
   <td align="center" colspan="2">
    
   <input type="submit" name="submit" id="submit" value="Send" class="sendbtn">
   <input type="button" name="cancel" id="cancel" value="Cancel" class="sendbtn">


</td>
   
</tr>



 </table>
 </form>
   










        </body>

        <?php 
        
        include("Foot.php");
        
        
        ?>
</html>











