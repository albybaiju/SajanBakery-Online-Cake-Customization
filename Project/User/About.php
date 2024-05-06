<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sajan Bakery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../Assets/Template/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/Template/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Template/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/Template/Main/css/style.css" rel="stylesheet">
    <link href="../Assets/Template/form.css" rel="stylesheet">
</head>
<style>
  

#img1
{
    width: 45px;
  height: 45px;
  border-radius: 50%;
}
.border{
 position:relative;
 padding: 5px;
 padding-right: 5px;
 padding-bottom: 5px;
 padding-top: 5px;
 border-radius:30px;
 color: #463F3F;
 background-color: #EEE7E7;
 text-transform: none;
 margin:auto;
 width: 31%;
 

}
.border:hover{


    background-color:#E5E3E3;
 color: #463F3F;

    
}

</style>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3" >
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>sajanbakery@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary"  >
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="homepage.php" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><img src="../Assets\Template\Login\images\abc.png" width="400" height="110"   alt=""></h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3 bg-secondary"  >
                <!-- <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>9495184432</span> -->
                        <?php   
                        session_start();
                    include("../Assets/Connection/Connection.php");
                     $selquery="select * from tbl_user where user_id=$_SESSION[uid]";
                                $data=$con->query($selquery);
                                $res=$data->fetch_assoc();                                ?>
                        <a href="#" class="nav-link dropdown-toggle border" data-bs-toggle="dropdown"><img id="img1" src="../Assets/Files/User/<?php echo $res["user_image"] ?>" alt=""> <?php echo $_SESSION['uname'] ; ?></a>
                    <div class="dropdown-menu m-0">
                        <a href="myprofile.php" class="dropdown-item">My Profile</a>
                        <a href="editprofile.php" class="dropdown-item">Edit Profile</a>
                        <a href="changepassword.php" class="dropdown-item">Change Password</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="homepage.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>Sajan Bakery</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script defer src="script.js"></script>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="homepage.php" class="nav-item nav-link a activeLink">Home</a>
                <!-- <div class="nav-item dropdown"> -->
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                    <div class="dropdown-menu m-0">
                        <a href="myprofile.php" class="dropdown-item">My Profile</a>
                        <a href="editprofile.php" class="dropdown-item">Edit Profile</a>
                        <a href="changepassword.php" class="dropdown-item">Change Password</a>
                    </div>
                </div> -->
                <a href="SendRequest.php" class="nav-item nav-link b activeLink">Customize cake</a>
                <a href="SearchProduct.php" class="nav-item nav-link">Search</a>
                <a href="MyCart.php" class="nav-item nav-link">Cart</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">View</a>
                    <div class="dropdown-menu m-0">
                        <a href="ViewRequest.php" class="dropdown-item">Customized Cake Orders</a>
                        <a href="MyBooking.php" class="dropdown-item">Product Bookings</a>
                    </div>
                </div>
                <a href="Complaint.php" class="nav-item nav-link ">Complaint</a>
                <a href="../Guest/login.php" class="nav-item nav-link">Sign Out</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
   

    <div id="tab" align="center">


    <h1 align="center">About Us: Sajan Bakery</h1>
    <br>

<p align="center">Welcome to Sajan Bakery, where every bite tells a story! Established in 1963, we have been passionately baking delightful memories for generations.</p>

<h3> Legacy</h3>
<p>Sajan Bakery's journey began in the heart of Chunkappara, founded by the our grandfather,<b> Mr.Daniel.P.Thomas</b> himself. What started as a modest venture quickly blossomed into a beloved community institution, known for its commitment to quality, tradition, and the artistry of baking.</p>

<h3>Time-Honored Recipes</h3>
<p>At Sajan Bakery, we cherish the time-honored recipes that have been passed down through the years. Our skilled bakers use only the finest ingredients, ensuring each creation is a testament to the rich heritage of baking. From golden, flaky croissants to decadent, layered cakes, our menu is a symphony of flavors that transcends time.</p>

<h3> Connection</h3>
<p>Beyond flour and sugar, Sajan Bakery is deeply rooted in the community. We take pride in being a part of your celebrations, whether it's a birthday, wedding, or simply a Tuesday morning that deserves a treat. Our warm, inviting atmosphere is a reflection of the close-knit relationships we've built with our customers over the decades.</p>

<h3>Innovation Meets Tradition</h3>
<p>While we hold steadfast to our traditional recipes, we also embrace innovation. Our team of creative bakers constantly explores new flavors and techniques, ensuring that each visit to Sajan Bakery is a unique experience. From classic favorites to innovative creations, there's always something fresh from our ovens.</p>

<h3>Customer Delight</h3>
<p>Our customers are at the heart of everything we do. Your smiles fuel our passion, and your satisfaction is our greatest reward. Whether you're a longtime patron or a first-time visitor, we strive to make every interaction with Sajan Bakery a delightful one.</p>

<p>Thank you for being a part of our bakery family. We look forward to continuing to bake memories for you and your loved ones for years to come.</p>

<p>Savor the sweetness,</p>
<p>The Sajan Bakery Team</p>

     
    <?php include("Foot.php"); ?>
</body>
</html>