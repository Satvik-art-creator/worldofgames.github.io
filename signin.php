<?php

session_start();

 
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>Sign in</title>
	<link rel="shortcut icon" type="image/jpg" href="Images/logojpg.jpg">
	<?php include 'link/links.php'; ?>
	<style type="text/css">
		
		*{
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
			box-sizing: border-box;
		}

		.divider-text{
			position: relative;
			text-align: center;
			margin-top: 15px;
			margin-bottom: 15px;
		}

		.divider-text span{
			padding: 7px;
			font-size: 12px;
			position: relative;
			z-index: 2;
		}

		.divider-text:after{
			content: "";
			position: absolute;
			width: 100%;
			border-bottom: 1px solid #ddd;
			top: 55%;
			left: 0;
			z-index: 1;
		}

		.btn-facebook{
			background-color: #405D9D!important;
			color: #fff!important;
		}

		.btn-gmail{
			background-color: #ea4335!important;
			color: #fff!important;
		}	 	

	</style>
</head>
<body>

<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);	


$emailquery = " select * from signindata where email = '$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);


if ($emailcount>0) {
	?>

		<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Email is already exist!",
				  icon: "error",
				  button: "OK",
				});
		</script>

	<?php
	
} else{
	if ($password === $cpassword) {

	$insertquery = "insert into signindata(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

		$iquery = mysqli_query($con, $insertquery);	
		if($iquery){

			$subject = "Account Activation";
			$body = "Hii $username, Your account has successfully signed in. (From www.worldofgames.com)";
			$headers = "From: satvikrastogi76@gmail.com";

			if (mail($email, $subject, $body, $headers)) {
				?>
				<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Email Succesfully sent to you!",
				  icon: "success",
				  button: "OK",
				});
				</script>

			<?php

			header('location:login.php');

			} else{
				?>

				<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Email UnSuccesful to sent you!",
				  icon: "error",
				  button: "OK",
				});
				</script>

			<?php

			}

			?>

		<script type="text/javascript">
			swal({
				  title: "Verification!",
				  text: "Inserted Succesful!",
				  icon: "success",
				  button: "OK",
				});
		</script>

	<?php


	} else{
		?> 
			
			<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Inserted UnSuccesful!",
				  icon: "error",
				  button: "OK",
				});
		</script>

	<?php

	}
		} else{

		?> 

		<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Password is not matching!",
				  icon: "error",
				  button: "OK",
				});
		</script>

	<?php
	}
}


}


?>


	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>

			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
					</div>
						<input type="text" name="username" class="form-control" placeholder="full name" required>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
					</div>
						<input type="email" name="email" class="form-control" placeholder="Email address" required>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-phone"></i></span>
					</div>
						<input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
						<input type="password" value="" name="password" class="form-control" placeholder="Create password" required>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
				</div>

				<p class="text-center">Have an account? <a href="login.php">Log in 
				</a></p>
			</form>
		</article>
		
	</div>


</body>
</html>