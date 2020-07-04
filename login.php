<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<head>
	<title>Log in</title>
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
	$email = $_POST['email'];
	$password = $_POST['password']; 

	$email_search = " select * from signindata where email='$email' ";
	$query = mysqli_query($con,$email_search);

	$email_count = mysqli_num_rows($query);

	if ($email_count) { 
		$email_pass = mysqli_fetch_assoc($query);

		$db_pass = $email_pass['password'];

		$_SESSION['username'] = $email_pass['username'];

		$pass_decode = password_verify($password, $db_pass);

		if ($pass_decode) {
			?>
				<script type="text/javascript">
				swal({
				  title: "Verification!",
				  text: "Login Successful!",
				  icon: "success",
				  button: "OK",
				});
				</script>

			<?php

			header('location: gaminglogout.php');

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

		}else{
			?>

		<script type="text/javascript">
			swal({
				  title: "Verification!",
				  text: "Invalid Email!",
				  icon: "error",
				  button: "OK",
				});
		</script>

		<?php

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
						<input type="email" name="email" class="form-control" placeholder="Email Id" required>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
					</div>
						<input type="password" value="" name="password" class="form-control" placeholder="Password" required>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
				</div>

				<p class="text-center">Not have an account? <a href="signin.php">Sign up here 
				</a></p>
			</form>
		</article>
		
	</div>


</body>
</html>