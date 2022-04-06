<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/register.css">
	<title>Sign Up</title>
</head>

<body>
	<div class="container">
		<form action="index.php" method="post">
			<div class="title">Sign Up</div>
			<input type="hidden" name="action" value="signup_submission">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Username</span>
					<input type="text" name="username" placeholder="Enter your username" required>
				</div>
				<div class="input-box">
					<span class="details">First Name</span>
					<input type="text" name="name" placeholder="Enter your first name" required>
				</div>
				<div class="input-box">
					<span class="details">Last Name</span>
					<input type="text" name="last_name" placeholder="Enter your last name" required>
				</div>
				<!-- <div class="input-box">
					<span class="details">Role</span>
					<select class="select" name="role" required>
						<option disabled selected>Select role</option>
						<option value="0">Usuario</option>
						<option value="1">Administrador</option>
					</select>
				</div> -->
				<div class="input-box">
					<span class="details">Password</span>
					<input type="password" name="password" placeholder="Enter your password" required>
				</div>
			</div>
			<input class="button" type="submit" value="Sign Up">
		</form>
	</div>


</body>

</html>