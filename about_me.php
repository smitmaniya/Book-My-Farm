<?php
if(isset($_GET['uname']) && isset($_GET['uid']))
{
	include 'db.php';
$u_id=$_GET['uid'];
$err='';
	$s_select = "SELECT * from user WHERE userid='$u_id'";
	$run = mysqli_query($con,$s_select);
	while($row = mysqli_fetch_assoc($run))
	{
		$name=$row['name'];
		$lname=$row['lname'];
		$email=$row['email'];
		$mob=$row['mobno'];
		$userid=$row['userid'];
		$add=$row['address'];
	}
	if(isset($_POST['editme']))
	{
		$name = $_POST['name'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		
	$updtsql="UPDATE `user` SET `name` = '$name',`lname`='$lname',`address`='$address' WHERE `userid` = $u_id";
		if(mysqli_query($con,$updtsql))
		{
			$err='<div class="alert alert-success">UPDATED SUCCESSFULLY<i class="glyphicon glyphicon-pencil pull-right"></i></div>';
		}
		else
		{
			$err='<div class="alert alert-danger">SERVER ERROR! PLEASE TRY AFTER FEW DAY</div>';
		}
	}
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ABOUT YOU | BOOK MY FARM</title>
        <link rel="stylesheet" href="farm.css">
			
  <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body style="
height:100%;
width: 100%;
background-size: cover;
background-position: center;
background-attachment: fixed;
position: absolute;" background="farm details photos/bgbg.jpg">
	
	<div class="container-fluid-my-4">
		<div class="container">
		<div class="row">
		
		

<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
				<?php  echo '<form action="about_me.php?uname='.$name.'&uid='.$userid.'"  class="form-horizontal" method="post">'; ?>
				<?php echo $err; ?>
				<div class="panel panel-info">
					<div class="panel-heading jumbotron">
					<font face="cailibri"><h1 align="center">Your Info</h1></font>
					</div>
					<div class="panel-body">
						<div class="form-group">

						<label for="name" class="col-sm-2 control-label">NAME</label>
						
							<div class="col-sm-5">
								<input type="text" id="name" class="form-group form-control" name="name" value="<?php echo $name; ?>">
							</div>
							<div class="col-sm-5">
								<input type="text" id="name" class="form-group form-control" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
						<label for="email" class="col-sm-2 control-label">EMAIL</label>
						
						<div class="col-sm-10">
						<input type="text" id="email" class="form-group form-control" name="email" disabled value="<?php echo $email;?>"placeholder="Email Address">
						</div>
						
						</div>
						<div class="form-group">
						<label for="contact" class="col-sm-2 control-label">Contact No.</label>
						
							<div class="col-sm-10">
								<input type="text" id="contact" class="form-group form-control" name="mob" value="<?php echo $mob; ?>" disabled >
							</div>
						
						</div>
						<div class="form-group">
						<label for="id" class="col-sm-2 control-label">Your User Id</label>
						
							<div class="col-sm-10">
								<input type="text" class="form-group form-control" name="id" disabled value="<?php echo $userid; ?>">
							</div>
						
						</div>
						<div class="form-group">
						<label for="contact" class="col-sm-2 control-label">Address</label>
						
							<div class="col-sm-10">
								<textarea id="feedback" rows="5" class="form-group form-control" name="address" placeholder="Please give us to your Address" value="<?php echo add; ?>"></textarea>
							</div>
						
						</div>
						<div class="form-group">
						
						
							<div class="col-sm-10 col-sm-offset-2">
								<input type="submit"  class="form-group form-control btn btn-primary block" name="editme" value="EDIT ME">
							</div>
						
						</div>
					
					
					
					</div>
				</div>
			</form>
			</div>
			
		</div>
		</div>
		 
    </body>
</html>
<?php
}
else
	echo 'server error';
?>

