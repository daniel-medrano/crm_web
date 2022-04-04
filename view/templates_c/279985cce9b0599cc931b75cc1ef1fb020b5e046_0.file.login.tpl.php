<?php
/* Smarty version 4.1.0, created on 2022-04-03 19:37:34
  from 'C:\xampp\htdocs\crm_web2\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249db5e6d6005_44980111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279985cce9b0599cc931b75cc1ef1fb020b5e046' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\login.tpl',
      1 => 1648957114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249db5e6d6005_44980111 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Sing Up</title>
</head>

<body>
    <div class="container">
        <div class="title">Sign In</div>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="login">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="username" type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="text" placeholder="Enter your password" required>
                </div>
                <div class="button">
                    <input type="submit" value="Sign In">
                </div>
            </div>
        </form>
    </div>
</body>

</html><?php }
}
