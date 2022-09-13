<?php
	session_start();
if(isset($_SESSION['uname']))
{
	if(isset($_GET['p_name']))
	{
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>BOOKING FORM | BOOK MY FARM  </title>
<link type="text/css" rel="stylesheet" href="booking.css" >
<link type="text/css" rel="stylesheet" href="bootstrap.min.css" >
<link  rel="stylesheet" href="glyphicon.css" >

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

			
	<link type="text/css" rel="stylesheet" href="bootstrap.min.css" >



</head>

<body style="background-color: black;">

    <nav class="navbar navbar-inverse" id="navgi">
        <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><span style="color: white;"><b>BOOK</b></span><span style="color:orange"><b>MY</b></span><span style="color: white;"><b>FARM</b></span></a>
          </div>
         
           
         
         
      
     <?php
	 $_SESSION['place_name']=$_GET['p_name'];
	 $_SESSION['place_id']=$_GET['p_id'];
	
    echo '<ul class="nav navbar-nav navbar-right">
		<li><a href="#">WELCOME</li></a>
      <li style="font-size:1.3em"><a href="#" target="blank"><span class="glyphicon glyphicon-user"></span> <b>'.ucfirst($_SESSION['uname']).'</b></a></li>
     <li><a href="logout.php" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> 
     
    
    </ul>';
	?>
          
        </div>
        
      </nav>
      

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
				<?php if($_GET['err']=="booked"){
				echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Your Place is already Booked On Your Date Try Different Dates Or Different Place</h3></div>';
			}
			if($_GET['err']=="samedate"){
				echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Checkin Date is not equal to Checkout Date.You have Booked atleast 24 Hours.For more You Have read our Terms And Conditions </h3></div>';
			}
			if($_GET['err']=="dateerr"){
				echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">Checkin date is not Greater than checkout date</h3></div>';
			}			
			if($_GET['err']=="bigday"){
				echo '<div class="alert alert-danger" style="><h3 align="center" style="margin-top:-10px;">You can not book This place for greater than 8 Days, If you want than First Contact Us and request Us via E-mail With pProper Reason</h3></div>';
			}?>
			
					<div class="booking-form" style="max-width:70%;">
						<div class="form-header">
							<h1>Make your reservation for <?php echo $_SESSION['place_name'];?></h1>
						</div>
						<form action="book_process.php" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Please Provide Address" name="address"required>
								<span class="form-label">Destination</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="checkin" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" name="checkout"required>
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="no_of_rooms"required>
											<option value="" selected hidden>no of rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="no_of_adults"required>
											<option value="" selected hidden>no of adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="no_of_child" required>
											<option value="" selected hidden>no of children</option>
											<option value="0" >0</option>
											<option value="1" >1</option>
											<option value="2" >2</option>
											<option value="3" >3</option>
											<option value="4" >4</option>
											<option value="5" >5</option>
											<option value="6" >6</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" name="book_email" placeholder="Enter your Email" required>
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" name="book_mob" placeholder="Enter you Phone" required>
										<span class="form-label">Phone</span>
									</div>
						        </div>
						   </div>
							<div class="form-btn">
							<input type="submit" class="submit-btn" name="book">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>

</html>
<?php
	}
	else{
		header('Location:homepage.php');
		}
}
else
{
	header("location:login.php");
}
?>