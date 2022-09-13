<?php
	session_start();
if(isset($_SESSION['uname']))
{
	?>
<!DOCTYPE html>
<html>
    <head>
        <title>FARM HOUSES | BOOK MY FARM</title>
        <link rel="stylesheet" href="farm.css">
			
  <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
  
    </head>
    <body>
        <div class="image">
                                          
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
              
            <a class="nav navbar-brand" href="#"><span style="color:white">Book</span><span style="color:orange;">My</span><span style="color:white">Farm</span></a>
              </div> <?php

   echo' <ul class="nav navbar-nav">
      <li><a class="navlink"href="homepage.php">Home</a></li>

      <li class="active"><a href="#" target="blank">Farm Gallary</a></li>
      <li><a href="resort.php?cat_name=resort">Resort Gallary</a></li>
      <li><a href="contact.php">Contact</a></li>
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
          
        </div>
         <div class="hero-wrap" style="background-image:linear-gradient(rgba(0 , 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('farm details photos/card back.jpg');height:100%;
        width: 100%;
        background-size: cover;
        background-position:center;
        background-attachment: fixed;
		margin-top:-20px;
        position: absolute;"><!--bg-image-->
        <section class="hero-wrap hero-wrap-2 js-fullheight" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                   
               <font face="Rockwell"><h1 class="mb-3 bread" style="color:#f1f1f1; margin-top:52%"><b>FARM HOUSE</b></h1></font>
                </div>
              </div>
            </div>
        </section>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
        
        <div class="container-fluid-my-4">
		<div class="container">
		<div class="row">
         <?php
		include 'db.php';
		$_SESSION['cat']=$_GET['cat_name'];
		$cat = $_SESSION['cat'];
		$selectfarm_sql = "SELECT * FROM place WHERE category = '$cat'";
		$runfarm_sql = @mysqli_query($con,$selectfarm_sql);
		$count = 0;
		$_SESSION['category'] = "farm";
		
		
		while($row = @mysqli_fetch_assoc($runfarm_sql))
		{
		if($count%3==0)
		{
			echo'<div class="row">';
		}
       echo'<div class="col-md-1"></div>
            <div class="card col-md-3 mx-auto " style="width: 30rem;border-width: 3px;border-color:black; margin-top:20px; margin-left:20px;margin-bottom:20px">
            <img class="class-img-top thumbnail" src="'.$row['img'].'" style="margin-top: 20px; height:30vh;width:26rem" >
                <div class="card-body">
                  <h3 class="card-title panel panel-default" style="margin-top: -10px;" align="center"><b>'.$row['name'].'</b></h3>
                  <p class="card-text">Show about '.$row['name'].' And Book Now</p>
                  <strike>₹'.$row['price'].'</strike>/per day&nbsp;&nbsp;&nbsp;&nbsp;<p class="pull-right"><b> ₹'.$row['dis_price'].'/per day</b></p> <br>Save ₹2300<br><br>
                  <a href="bookingform.php?p_name='.$row['name'].'&p_id='.$row['id'].'&err=noerror" class="btn pull-left" style="background-color: DodgerBlue; color:white;">Book Now</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="Farm Detail/'.$row['name'].'.html" target="blank" class="btn pull-right" style="background-color: DodgerBlue; color:white;">Details</a>
				
			   </div>';
			   
             echo '</div>';
			 
		if($count%3==0)
		{
		echo'</div>';
		}	
		$count ++;
		}
		?>
		</div>
		</div>
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
