
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BOOK MY FARM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homepage.css"> 
 <link rel="stylesheet" href="bootstrap.min.css">
 <link  rel="stylesheet" href="glyphicon.css" >
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  

   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>


<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>


<div class="navgi">
<nav class="abc navbar navbar-inverse " id="navgi" >
  <div class="container-fluid">
  <div class="navbar-header">
    
  <a class="navbar-brand" href="#"><span style="color: white;"><b>BOOK</b></span><span style="color:orange"><b>MY</b></span><span style="color: white;"><b>FARM</b></span></a>
    </div>
   
     
   <?php

   echo' <ul class="nav navbar-nav">
      <li class="active"><a class="navlink"href="#">Home</a></li>

      <li><a href="farm_index.php?cat_name=farm" target="blank">Farm Gallary</a></li>
      <li><a href="resort_index.php?cat_name=resort">Resort Gallary</a></li>
      <li><a href="contact_index.php">Contact</a></li>
      <li><a href="about_index.php">About</a></li>
    </ul>';
	
	
	?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span><b>Sign Up</b></a></li>
     <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span>Log IN</a></li> 
     
    
    </ul>
	
  </div>
  
</nav>


<div class="backimage">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center">
        <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              <h1 class="slogancolor">Now <span>It's easy for you</span> <span>Book a Farm</span></h1>
              <p class="slogancolor" style="font-size: 18px;" >Now Book Your Farm And Let's Enjoy your valueable Time.<br>"If a man who enjoys a lesser happiness beholds a greater one, let him leave aside the lesser to gain the greater."
            </p>
              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="ion-ios-play"></span>
                  </div>
                  <div class="step">
                    <b> <h4><span>Easy steps for Booking a Farm</span></h4></b>
                  </div>
              </a>
          </div>
        </div>


        <div class="col-lg-2 col"></div>
        <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
            <div class="form">
            <form action="search_farm.php" class="request-form ftco-animate" method="post">
                <font face="Times new roman"><h1>Book Your Farm</h1></font>
				<hr>
                      <div class="form-group">
                          <label for="city" class="control-label">Booking City</label>
                          <select class="form-control" id="city" name="search_city" required>
						  <option selected value="">Select City</option>
						  <option value="surat">Surat</option>
						  </select>
                      </div>
                          <div class="d-flex">
                          <div class="form-group mr-2">
                  <label for="book_pick_date" class="control-label" >Check-in</label>
                  <input type="date" class="form-control" name="check_in"id="book_pick_date" placeholder="Cheack-in" required>
                </div>

                <div class="form-group ml-2">
                    <label for="book_out_date" class="control-label">Check-out</label>

                  <input type="date" class="form-control" id="book_out_date" name="check_out"placeholder="Cheack-out" required>
                </div>
            </div>
			<select class="form-control" name="cat">
                <option selected> Select Catageory</option>
                <option value="farm">Farm</option>
                <option value="resort">Resort</option>
				<option value="">All</option>
            </select><br>

            <select class="form-control">
                <option selected=""> Which Time You Book</option>
                <option>Morning</option>
                <option>Evening</option>
            </select><br>

                      <div class="form-group">
                <input type="submit" value="Search Farm" name="search_farm"class="btn btn-primary btn-block">
              </div>
                  </form>
                </div>
        </div>
      </div>
    </div>
  </div>

 
  
<div class="container">
  
</div>


<section class="ftco-section services-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
      <span class="navbar-brand" style="font-size: 40px;text-align: center;margin-left: 38%"><font face="Rockwell"><h1 id="serv">Our <span style="color: burlywood;"><b> Services</b></span></h1></font></span>
      <br><br>
     <span class="subheading" style="font-size: monospace;text-align: center;margin-left: 32%;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Rockwell"><h1><b>We Provied You The Best...<b><h1></font></span>
    </div>
    </div>
  </div>
  </div>
  <br><br>
  <div class="container">
  <div class="row d-flex">
    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services">
      <div class="media-body py-md-4">
        <div class="d-flex mb-3 align-items-center">
          <div class="icon"><span class="flaticon-customer-support"></span></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="farm details photos\icon1.png" style="height: 100px; width: 100px;">
          <h3 class="heading mb-0 pl-3">24/7 Farm House Support</h3>
        </div>
        <p>You Can Get a Support 24x7 on Website.Our Team Will Always With You.</p>
      </div>
      </div>      
    </div>

      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services">
      <div class="media-body py-md-4">
      <div class="d-flex mb-3 align-items-center">
          <div class="icon"><span class="flaticon-online-booking"></span></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="farm details photos\icon3.png" style="height: 100px; width: 100px;">
          <h3 class="heading mb-0 pl-3">Assured Guaranteed</h3>
        </div>
        <p>All The Farm House Asuured With Legal Documents , Policy And Certified By Goverment. So You Can Trust Us.</p>
      </div>
      </div>      
    </div>
    
    
    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services">
      <div class="media-body py-md-4">
        <div class="d-flex mb-3 align-items-center">
          <div class="icon"><span class="flaticon-rent"></span></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="farm details photos\icon2.png" style="height: 100px; width: 100px;">
          <h3 class="heading mb-0 pl-3">Anytime Cancellation</h3>
        </div>
        <p>You Can Cancel Your Booked Farm House Anytime. No Extra Charges For Cancellation</p>
      </div>
      </div>      
    </div>
    </div>
  </div>
  
  </div>
    

  </section>
  
  

  <section class="workflow" >
   
    <div class="overlay"> </div>
    <div class="container" style="height: 350px;">
      
      <div class="row justify-content-center mb-5" style="height: 200px;">
      
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate" style="height: 150px;"><br><br><br>
         <span style=" color: #fefefe;font-size: 25px; margin-left: 500px; padding: 7px; ">Work flow</span><br><br>
          <h2 id="howwork" class="subheading" style=" color: #fefefe;   margin-left: 480px; margin-bottom: 200px;">How it works</h2> 
        </div>
      </div>
    
      <div class="row" style="padding-top:-50px;" >
        <div class="col-md-4 ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
        <img src="farm details photos\icon location.png" style="height: 100px; width: 100px;">
              <h3 style="color: #f1f1f1"><b>Pick City</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black">Choose Your Farm House Booking City</p>
            </div>
          </div>      
        </div>
                
        <div class="col-md-4  ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
        <img src="farm details photos\icontime.png" style="height: 100px; width: 100px;">
        <h3 style="color: #f1f1f1"><b>Set Time</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black">Set Time Limit For Your Selected Farm House</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4  ftco-animate">
          <div class="media block-6 services services-2">
            <div class="media-body py-md-4 text-center">
        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
        <img src="farm details photos\iconfarm.png" style="height: 100px; width: 100px;">
              <h3 style="color: #f1f1f1"><b>Let's Book Your Farm</b></h3>
              <p class="panel panel-sm panel-danger" style="color: black"> Enjoy Your Time in Your Book Farm</p>
            </div>
          </div>      
        </div>
      </div>
  
    </div>
    
 
</section><br><br>

<footer class="footer">
  <div class="container">
    <div class="row mb-5">
    <div class="col-md-4">
      <div class="ftco-footer-widget mb-4 ml-md-5">
      <h2 class="ftco-heading-2" style="color:white; margin-top: 8%;">Information</h2>
      <ul class="list-unstyled"><br>
        <li><a href="about.html" class="py-2 d-block" style="color:white;">About</a></li>
        <li><a href="#serv" class="py-2 d-block" style="color:white;">Services</a></li>
        <li><a href="#" class="py-2 d-block" style="color:white;">Term and Conditions</a></li>
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
        <li><a href="#howwork" class="py-2 d-block" style="color:white;">How it works</a></li>
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
          <li><span class="text" style="color:white;">+916355306892</span></li>
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



<script>
  

  var modal = document.getElementById('modal-wrapper');
  window.onclick = function(event) {
  if (event.target == modal) {
  modal.style.display = "none";
  }
  }
</script>


 </body>
</html>
