<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ABOUT | BOOK MY FARM </title>

<link type="text/css" rel="stylesheet" href="bootstrap.min.css" >
<link rel="stylesheet" href="footer.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

	<link rel="stylesheet"  href="TC1.css" >
<style>

.info{
	text-align: justify;
	font-size: 17px;
}

.heading{
	font-size:30px;
	color:orange;
}
*{
	-webkit-margin:0;
	-webkit-padding:0;
}

</style>


</head>

<body>

    <nav class="navbar navbar-inverse" id="navgi">
        <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><span style="color: white;"><b>BOOK</b></span><span style="color:orange"><b>MY</b></span><span style="color: white;"><b>FARM</b></span></a>
          </div>
         
           
          <?php

   echo' <ul class="nav navbar-nav">
      <li><a class="navlink"href="homepage.php">Home</a></li>

      <li><a href="farm.php?cat_name=farm" target="blank">Farm Gallary</a></li>
      <li><a href="resort.php?cat_name=resort">Resort Gallary</a></li>
      <li class="contact.php"><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>
    </ul>';
	
	 echo '<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
    <a class="dropdown-toggle"  data-toggle="dropdown"><i class="fa fa-user fa-lg" aria-hidden="true"></i> <b>'.ucfirst($_SESSION['uname']).'</b>
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="booking.php?uname='.$_SESSION['uname'].'&uid='.$_SESSION['userid'].'">My Bookings</a></li>
	  <li><a href="canceltion.php?uname='.$_SESSION['uname'].'&uid='.$_SESSION['userid'].'">My Canceltion</a></li>  
	  <li class="disabled"><a href="#">Wishlist</a></li>
      <li class="disabled"><a href="#">Become Farm Renter</a></li>
      <li class="divider"></li>
      <li><a href="about_me.php?uname='.$_SESSION['uname'].'&uid='.$_SESSION['userid'].'">About me</a></li>
    </ul>
  </li>
     <li><a href="logout.php" ><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Logout</a></li> 
     
    
    </ul>';
	?>
      
          
        </div>
      </nav>
	  
	  <div class="hero-wrap" style="background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('farm details photos/about_bg_bmf.jpg');height:100%;
        width: 100%;
        background-size: cover;
        background-position:center;
        background-attachment: fixed;
		background-repeat: no-repeat;
        position: relative;
		margin-top:-20px;
		padding-top:4%"><!--bg-image-->
        <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5">
        
	  <div class="backimage">
		<div class="overlay"></div>
		<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                   
               <font face="Rockwell"><h1 class="mb-3 bread tc" style="color:#f1f1f1; margin-top:42%; "><b>ABOUT US</b></h1></font>
                </div>
              </div>
            </div>
			</div>
        </section>
        </div>	
		<br><br>
	<div class="container-fluid">
		<div class = "row">
			<div class = "col-md-5" >
			<br><br><br>
			<img src="farm details photos/Aboutus-man.png"/>
			</div>
			<div class="col-md-7">
				<h1 class="heading">ABOUT US</h1>
				<p class="info">BookMyFarm is a brainchild of Surat based business enthusiastic team Smit Maniya and TeamMembers.
				BookMyFarm is a unique concept that connects property holder or landlord directly to the customer without any hassle of middleman. 
				BookMyFarm provides an opportunity for property holders to generate staggering income out of their empty properties. 
				BookMyFarm provides an amazing opportunity to enjoy their weekends or holidays at such amazing places at affordable rates to the customer.
				</p><br>
				<p class="heading">SOCIAL AND ECONOMIC IMPACT</p>
				<p class="info">
				Searching and booking are easy at bookmyfarm.com. The website provides a detailed, realistic presentation of every
				holiday home, complete with text and pictures. You can read about the home and surrounding area, view the exact 
				location and check the amenities given at the place. This way, you are guaranteed no surprises. 
				</p><br>
				<p class="heading">BENEFITS OF BOOKMYFARM</p>
				<p class="info">
				BookMyFarm Provides a platform to property owners and landlords to generate healthy and steady income out of 
				their empty property. Thus they get an assurance of a certain amount to get every month. BookMyFarm helps the
				consumer to find idle properties to stay for their holidays or weekends, and that too in a single click. 
				This way consumer gets a top class property which fits into their budget in a trouble free way.
				</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
			<img src="farm details photos/myphoto.jpg" class="thumbnail pull-right"style="height:40vh">
			<p class="heading">Founder</p>
			</div>
			<div class="col-md-7 col-md-offset-1">
			<h1 class="heading">LEADERSHIP</h1><br>
			<p class="info">The founders of BookMyFarm is running a professional and one of the largest textile venture called BOOK MY FARM PVT LTD.</p>
			<p class="info">Mr. Smit is a multi-dimensional businessman and CEO of BookMyFarm. He shared equal hard work and success of BookMyFarm. This Ingenious duo is working with a vision to create a better environment for all the people to enjoy their holidays and generate hefty income.
			
			</p>
			</div>
		</div>
	</div>
	<footer class="footer">
  <div class="container">
    <div class="row mb-5">
    <div class="col-md-4">
      <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2" style="color:white; margin-top: 8%;">Information</h2>
      <ul class="list-unstyled"><br>
        <li><a href="#" class="py-2 d-block" style="color:white;">About</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Services</a></li>
        <li><a href="TC.html" class="py-2 d-block" style="color:white;">Term and Conditions</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Best Price Guarantee</a></li>
      </ul>
      </div>
    </div>
    <div class="col-md-4">
       <div class="ftco-footer-widget mb-4">
      <h2 class="ftco-heading-2" style="color:white; margin-top:8%;">Customer Support</h2>
      <ul class="list-unstyled"><br>
        <li><a href="#" class="py-2 d-block" style="color:white;">FAQ</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Payment Option</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Booking Tips</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">How it works</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Contact Us</a></li>
      </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="ftco-footer-widget mb-4">
        <h2 id="about" class="ftco-heading-2" style="color:white; margin-top: 10%;">Have a Questions?</h2>
        <div class="block-23 mb-3">
        <ul style="color:white;"><br>
          <li><span class="text" style="color:white;">Darshan Hostel ,Nadiad-Petlad Road,Changa</span></li>
          <li><span class="text" style="color:white;">+919825172172</span></li>
          <li><span class="text" style="color:white;">bookmyfarmhouse@gmail.com</span></li>
        </ul><br>

        <div class="social-handling;" style="color: white;">
          <img src="farm details photos\instagram.png" style="width:30px; height:30px ; "> book_my_farmhouse<br><br>
          <img src="farm details photos\face book.png" style="width:30px; height:30px ;">Book My FarmHouse<br><br>
          <img src="farm details photos\twitter.png" style="width:40px; height:40px ;"> Book My FarmHouse <br>
            
        </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">

      <p style="color:white;">
Copyright &copy;<script >document.write(new Date().getFullYear());</script> All rights reserved | This Website Is Made By NaReN Zadfiya
</p>
    </div>
    </div>
  </div>
  </footer>
  
  <script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>



