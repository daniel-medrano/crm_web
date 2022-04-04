<?php
/* Smarty version 4.1.0, created on 2022-04-03 04:23:47
  from 'C:\xampp\htdocs\crm_web\view\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624905336117b5_02234050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe12c76f7ff1900ca4948e0eb1360d3b0ff0437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\signup.tpl',
      1 => 1648948070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624905336117b5_02234050 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/sign.css">
	<title>Sing Up</title>
</head>

<body>
	<div class="container">
		<div class="title">Sign Up</div>
		<form action="index.php" method="post">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Username</span>
					<input type="text" placeholder="Enter your username" required>
				</div>
				<div class="input-box">
					<span class="details">First Name</span>
					<input type="text" placeholder="Enter your first name" required>
				</div>
				<div class="input-box">
					<span class="details">Last Name</span>
					<input type="text" placeholder="Enter your last name" required>
				</div>
				<div class="input-box">
					<span class="details">Mail</span>
					<input type="text" placeholder="Enter your mail" required>
				</div>
				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="text" placeholder="Enter your number" required>
				</div>
				<div class="input-box">
					<span class="details">Role</span>
					<input type="text" placeholder="Enter your role" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="text" placeholder="Enter your password" required>
				</div>
				<div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="text" placeholder="Confirm you password" required>
				</div>
			</div>
			<div class="gender-details">
				<input type="radio" name="gender" id="dot-1">
				<input type="radio" name="gender" id="dot-2">
				<input type="radio" name="gender" id="dot-3">
				<span class="gender-title">Gender</span>
				<div class="category">
					<label for="dot-1">
						<span class="dot one"></span>
						<span class="gender">Male</span>
					</label>
					<label for="dot-2">
						<span class="dot two"></span>
						<span class="gender">Female</span>
					</label>
					<label for="dot-3">
						<span class="dot three"></span>
						<span class="gender">Prefer not to say</span>
					</label>
				</div>
			</div>
			<div class="button">
				<input type="submit" value="Sign Up">
			</div>
		</form>
	</div>


</body>

</html><?php }
}