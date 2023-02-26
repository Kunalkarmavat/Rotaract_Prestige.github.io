<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style/style.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- css header -->
        <link rel="stylesheet" href="../other css/header.css">
        <link rel="stylesheet" href="../other css/color.css">
        
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
        font-awesome/5.15.2/css/all.min.css"/>
        
        <script src="https://kit.fontawesome.com/fa711afd03.js" crossorigin="anonymous"></script>

        <!-- main css -->
        <link rel="stylesheet" href="../other css/main.css">
        

     <link rel="stylesheet" href="../other css/header.css">
    <title>Document</title>
</head>
<body>
    

    <?php
@include "../connection2.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO leave_message (name,email,comment) VALUES ('$username','$email','$message')";
  if ($conn->query($sql) === TRUE) {
    header("location: ../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

?>


<style>
    .fixImg{
        background-image: url(../images/poorPeopleHand.jpg);
        /* display: flex;
        justify-content: center; */      
            
    }
</style>
 <!-- header start -->

 <header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left">
                    <ul class="social-links clearfix">
                       <li><a href="https://www.facebook.com/rotaractclubofprestige"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="https://instagram.com/rotaract_club_of_prestige?igshid=YmMyMTA2M2Y="><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://tube.com/channel/UCJyWXKhFppOPSXwowEy4RnA"><span class="fab fa-youtube"></span></a></li>
                    </div>

                <div class="top-right">
                    <ul class="info clearfix">
                        <li class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button></li>
                        <li><a href="tel:12345615523"><span class="icon fa fa-phone-alt"></span> Call: &nbsp;123 4561 5523</a></li>
                        <li><a href="mailto:info@templatepath.com"><span class="icon fa fa-envelope"></span> Email: &nbsp;rotaractprestige.gwalior@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="../index.php" title="rotaract_club_of_prestige?igshid"><h1 class="Rotaract">Rotaract <p>Prestige RID: 3053</p></h1> </a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="../index.php">Home</a>
                                 
                                <li class="dropdown"><a href="../about/about.html">About</a>
                                   
                                <li class="dropdown"><a href="../index.php">Causes</a>
                                                                                                         
                                    <li class="current dropdown"><a href="blog.html">Contact</a>
                                    </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <div class="link-box clearfix">
                        <div class="donate-link"><a href="../membership/
                        " class="theme-btn btn-style-one"><span class="btn-title">Apply for Membership</span></a></div>
                        <div class="cart-link"><a href="shopping-cart.html" class="theme-btn"><span class="icon flaticon-paper-bag"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

<!--End Header -->

<!-- fix front img  -->
<div class="container-fluid fixImg">
    <div class="text-box d-flex align-items-center ">
        <div class="content-box">
            <h2>Contact</h2>
            <!-- <div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div> -->
        </div> 
        </div>
</div>
  

    <!-- contact info -->
    <section class="contact-info-section">
        <div class="auto-container">
            
            <div class="sec-title centered">
                <div class="sub-title">Contact Us</div>
                <h2>Get In Touch</h2>
                <div class="text">Cupidatat non proident sunt</div>
            </div>
            
        	<div class="info-boxes">
                <div class="row clearfix">
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
							<div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-1.jpg')" data-was-processed="true" style="background-image: url(&quot;images/resource/contact-image-1.jpg&quot;);"></div>
                            <div class="icon-box"><span class="flaticon-home-location-marker"></span></div>
                            <h4>Our Location</h4>
                            <ul>
                            	<li>Airport Rd, D.D. Nagar, Deen Dayal Nagar, Gwalior, Madhya Pradesh 474020</li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-2.jpg')" data-was-processed="true" style="background-image: url(&quot;images/resource/contact-image-2.jpg&quot;);"></div>
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <h4>Phone Number</h4>
                            <ul>
                            	<li><a href="tel:(+55)654-545-5418">(+91)  915 - 685 - 5387</a></li>
                                <li><a href="tel:(+55)654-545-1235">(+91)  730 - 902 - 5801</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-3.jpg')" data-was-processed="true" style="background-image: url(&quot;images/resource/contact-image-3.jpg&quot;);"></div>
                            <div class="icon-box"><span class="flaticon-email"></span></div>
                            <h4>Email Address</h4>
                            <ul>
                                <li><a href="mailto:rotaractprestige.gwalior@gmail.com">rotaractprestige.gwalior@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        	</div>
            
        </div>
    </section>

    <!-- map location  -->

    

<div class="fluid-container d-flex justify-content-center ">

    <div class="row">
        <div class="col-lg-6 p-5">
            <div class="form-column clearfix  " >
                <div class="inner clearfix">
                
                    <div class="sec-title centered">
                        <div class="sub-title">Inquiry</div>
                        <h2>Leave a Message</h2>
                        <div class="text">Cupidatat non proident sunt</div>
                    </div>
                    
                    <!-- Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="contact.php" id="contact-form" novalidate="novalidate">
                            <div class="row clearfix">                                    
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your name" required="">
                                </div>
                                
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>
        
                                <div class="col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
        
                                <div class="col-md-12 col-sm-12 form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
        	</div>
        
        </div>
        <div class="col-lg-6 "> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.0295611743923!2d78.21520707534009!3d26.26070397704182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c1273e3c14e9%3A0x17301bfd69162e2a!2sPrestige%20Institute%20of%20Management%20%26%20Research%2C%20Gwalior!5e0!3m2!1sen!2sin!4v1672232209433!5m2!1sen!2sin" width="670" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    </div>
    </div>
</div>




<!-- become a volunteers -->

<section class="call-to-action-two">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="title-box wow fadeInLeft animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;"><h2>Become A Volunteer</h2></div>
                <div class="link-box wow fadeInRight animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInRight;"><a href="contact.html" class="theme-btn btn-style-five"><span class="btn-title">Get Involved</span></a></div>
            </div>
        </div>
    </section>
    
    <!-- main footer -->

    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
                        	<div class="widget-content">
                                <div class="footer-logo">
                                    <a href="index.html"><h1 class="Rotaract">Rotaract</h1></a>
                                </div>
                                <div class="text">Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercita.</div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<div class="widget-content">
								<h3>Services</h3>
                                <ul>
                                    <li><a href="#">Donate</a></li>
                                    <li><a href="#">Sponsor</a></li>
                                    <li><a href="#">Fundraise</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                    <li><a href="#">Partner</a></li>
                                    <li><a href="#">Jobs</a></li>
                                </ul>
							</div>	
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget info-widget">
							<div class="widget-content">
								<h3>Contacts</h3>
								<ul class="contact-info">
                                	<li>Prestige Institute of managment, DD nagar ,gwalior</li>
                                    <li><a href="tel:+91000000000">+91000000000</a></li>
                                    <li><a href="our gamil:rotaractprestige.gwalior@gmail.com">info@loveuscharity.com</a></li>
                                </ul>
							</div>	
						</div>
					</div>
                    
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<div class="widget-content">
								<h3>Top News</h3>
                                <!--News Post-->
								<div class="news-post">
                                	<div class="post-thumb"><a href="#"><img class="lazy-image loaded" src="images/resource/post-thumb-1.jpg" data-src="images/resource/post-thumb-1.jpg" alt="" data-was-processed="true"></a></div>
                                	<h5><a href="#">School for Indian Childrens</a></h5>
                                    <div class="date">July 25, 2019</div>
                                </div>
                                <!--News Post-->
								<div class="news-post">
                                	<div class="post-thumb"><a href="#"><img class="lazy-image loaded" src="images/resource/post-thumb-2.jpg" data-src="images/resource/post-thumb-2.jpg" alt="" data-was-processed="true"></a></div>
                                	<h5><a href="#">School for Indian Childrens</a></h5>
                                    <div class="date">July 25, 2019</div>
                                </div>
							</div>	
						</div>
					</div>
					
				</div>
	</footer>
      


    
    <script src="../script.js"></script>
</body>
</html>