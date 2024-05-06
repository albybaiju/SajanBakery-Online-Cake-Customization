<?php
session_start();

?>

<html>
    <head>


    <meta charset="utf-8">
    <title>Privacy Policy</title>
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
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="homepage.php" class="nav-item nav-link active">Home</a>
                <!-- <div class="nav-item dropdown"> -->
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                    <div class="dropdown-menu m-0">
                        <a href="myprofile.php" class="dropdown-item">My Profile</a>
                        <a href="editprofile.php" class="dropdown-item">Edit Profile</a>
                        <a href="changepassword.php" class="dropdown-item">Change Password</a>
                    </div>
                </div> -->
                <a href="SendRequest.php" class="nav-item nav-link">Customize cake</a>
                <a href="SearchProduct.php" class="nav-item nav-link">Search</a>
                <a href="MyCart.php" class="nav-item nav-link">Cart</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">View</a>
                    <div class="dropdown-menu m-0">
                        <a href="ViewRequest.php" class="dropdown-item">Customized Cake Orders</a>
                        <a href="MyBooking.php" class="dropdown-item">Product Bookings</a>
                    </div>
                </div>
                <a href="Complaint.php" class="nav-item nav-link">Complaint</a>
                <a href="../Guest/login.php" class="nav-item nav-link">Sign Out</a>
            </div>
        </div>
    </nav>
    <h2 align="center"><strong>Terms and Conditions</strong></h2>
</head>

<body>
<p>Welcome to Sajan Bakery!</p>

<p>These terms and conditions outline the rules and regulations for the use of Sajan Bakery's Website, located at http://localhost/SajanBakery/Project/User/homepage.php.</p>

<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Sajan Bakery if you do not agree to take all of the terms and conditions stated on this page.</p>

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of in. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3><strong>Cookies</strong></h3>

<p>We employ the use of cookies. By accessing Sajan Bakery, you agreed to use cookies in agreement with the Sajan Bakery's Privacy Policy. </p>

<p>Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3><strong>License</strong></h3>

<p>Unless otherwise stated, Sajan Bakery and/or its licensors own the intellectual property rights for all material on Sajan Bakery. All intellectual property rights are reserved. You may access this from Sajan Bakery for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from Sajan Bakery</li>
    <li>Sell, rent or sub-license material from Sajan Bakery</li>
    <li>Reproduce, duplicate or copy material from Sajan Bakery</li>
    <li>Redistribute content from Sajan Bakery</li>
</ul>

<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com/">Free Terms and Conditions Generator</a>.</p>

<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Sajan Bakery does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Sajan Bakery,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Sajan Bakery shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>Sajan Bakery reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

<p>You warrant and represent that:</p>

<ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>

<p>You hereby grant Sajan Bakery a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

<h3><strong>Hyperlinking to our Content</strong></h3>

<p>The following organizations may link to our Website without prior written approval:</p>

<ul>
    <li>Government agencies;</li>
    <li>Search engines;</li>
    <li>News organizations;</li>
    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>

<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party's site.</p>

<p>We may consider and approve other link requests from the following types of organizations:</p>

<ul>
    <li>commonly-known consumer and/or business information sources;</li>
    <li>dot.com community sites;</li>
    <li>associations or other groups representing charities;</li>
    <li>online directory distributors;</li>
    <li>internet portals;</li>
    <li>accounting, law and consulting firms; and</li>
    <li>educational institutions and trade associations.</li>
</ul>

<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Sajan Bakery; and (d) the link is in the context of general resource information.</p>

<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party's site.</p>

<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Sajan Bakery. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

<p>Approved organizations may hyperlink to our Website as follows:</p>

<ul>
    <li>By use of our corporate name; or</li>
    <li>By use of the uniform resource locator being linked to; or</li>
    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party's site.</li>
</ul>

<p>No use of Sajan Bakery's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

<h3><strong>iFrames</strong></h3>

<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

<h3><strong>Content Liability</strong></h3>

<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

<h3><strong>Reservation of Rights</strong></h3>

<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it's linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

<h3><strong>Removal of links from our website</strong></h3>

<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

nditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>



    
</body>
</html>
<?php
include("Foot.php"); ?>
    