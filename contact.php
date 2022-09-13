<?php

include 'db.php';
$err='';
if(isset($_POST['submit_feedback']))
{
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['f_email'];
	$mob = $_POST['f_mob'];
	$feedback = $_POST['feedback'];;
	$insquery = "INSERT INTO `feedback` (`f_fname`,`f_lname`,`f_email`,`f_contact`,`feedback`) VALUES('$fname','$lname','$email','$mob','$feedback')";
	if(mysqli_query($con,$insquery))
	{
		$err = '<div class="alert alert-success">Thank you for Your Valuable Feedback.we will soon touch you</div>';
	}
	else
	{
		$err = '<div class="alert alert-danger">SERVER Error! Please contact us via Email.</div>';
	}
}



?>
<?php
	session_start();
if(isset($_SESSION['uname']))
{
	?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CONTACT US | BOOK MY FARM </title>


<link rel="stylesheet" href="footer.css">
<link  rel="stylesheet" href="bootstrap.min.css" >


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet"  href="TC1.css" >
<style>

.info{
	text-align: Center;
	font-size: 20px;
	
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
      <li class="active"><a href="#">Contact</a></li>
      <li><a href="about.php">About</a></li>
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
<div class="hero-wrap" style="background-image:url('farm details photos/contact.jpg');height:100%;
        width: 100%;
        background-size: 100% 100%
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
                   
               <font face="Rockwell"><h1 class="mb-3 bread tc" style="color:#f1f1f1; margin-top:20%; "><b>CONTACT US</b></h1></font>
                </div>
              </div>
            </div>
			</div>
        </section>
        </div>	
		<br><br><br>
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
			<font face="the times new roman"><p class="heading">
			Namaste, Hello, Hola, Vanakam…everything is welcome as long 
			as you are excited to share your ideas. We are all ears and eagerly waiting to connect. 
			Call, ping or mail, whatever suits you.</p></font>
			</div><br><br><br><br><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="col-md-5 col-md-offset-4">
					<span class="glyphicon glyphicon-phone pull-center" style="font-size:50px;  padding:15px"></span>
					</div>
				<font face="Rockwell" size="32px";><h1 align="center"><b>PHONE</b></h1></font>
				<p class="info">A wonderful serenity has<br>taken posses-sion of<br> my entire soul,<br> like these sweet mornings</p>
				<font face="Rockwell"><h1 align="center"><b>1800 123 9292</b></h1></font>
				</div>
				<div class="col-md-4">
					<div class="col-md-5 col-md-offset-4">
					<span class="glyphicon glyphicon-envelope" style="font-size:50px;  padding:15px"></span>
					</div>
				<font face="Rockwell"><h1 align="center"><b>EMAIL</b></h1></font>
				<p class="info">A wonderful serenity has<br>taken posses-sion of<br> my entire soul,<br> like these sweet mornings</p>
				<font face="cailibri"><h1 align="center"><b>care@bookmyfarm.com</b></h1></font>
				</div>
			</div><br><br>
		
			<div class="col-md-8 col-md-offset-2">
				<form action="contact.php" method="post" class="form-horizontal" method="post">
				<?php echo $err; ?>
				<div class="panel panel-warning">
					<div class="panel-heading jumbotron">
					<font face="cailibri"><h1 align="center">Leave Us Your Info</h1></font>
					</div>
					<div class="panel-body">
						<div class="form-group">
						<label for="name" class="col-sm-2 control-label">NAME</label>
						
							<div class="col-sm-5">
								<input type="text" id="name" class="form-group form-control" name="fname" placeholder="First Name">
							</div>
							<div class="col-sm-5">
								<input type="text" id="name" class="form-group form-control" name="lname" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
						<label for="email" class="col-sm-2 control-label">EMAIL</label>
						
						<div class="col-sm-10">
						<input type="text" id="email" class="form-group form-control" name="f_email" placeholder="Email Address">
						</div>
						
						</div>
						<div class="form-group">
						<label for="contact" class="col-sm-2 control-label">Contact No.</label>
						
							<div class="col-sm-10">
								<input type="text" id="contact" class="form-group form-control" name="f_mob" placeholder="Mobile Number">
							</div>
						
						</div>
						<div class="form-group">
						<label for="contact" class="col-sm-2 control-label">Feedback</label>
						
							<div class="col-sm-10">
								<textarea id="feedback" rows="5" class="form-group form-control" name="feedback" placeholder="Please give us to your Experiance / Problem / Suggestion"></textarea>
							</div>
						
						</div>
						<div class="form-group">
						
						
							<div class="col-sm-10 col-sm-offset-2">
								<input type="submit"  class="form-group form-control btn btn-warning block" name="submit_feedback" value="SUBMIT">
							</div>
						
						</div>
					
					
					
					</div>
				</div>
			</form>
			</div>
			
		</div>
		<footer class="footer">
  <div class="container">
    <div class="row mb-5">
    <div class="col-md-4">
      <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2" style="color:white; margin-top: 8%;">Information</h2>
      <ul class="list-unstyled"><br>
        <li><a href="about.html" class="py-2 d-block" style="color:white;">About</a></li>
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
<?php
}
else
{
	header("location:login.php");
}
?>



	