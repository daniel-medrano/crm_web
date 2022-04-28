<?php
/* Smarty version 4.1.0, created on 2022-04-28 02:03:01
  from 'C:\xampp\htdocs\crm_web\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269d9b5390b34_09594796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18298d619ce94848f1aff5c30a4f4f762662d344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\login.tpl',
      1 => 1649197705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6269d9b5390b34_09594796 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Sing Up</title>
</head>

<body>
    <form action="index.php" method="post">
        <div class="container login">
            <h2 class="title">Sign In</h2>
            <input type="hidden" name="action" value="login">
            <div class="input-box">
                <span class="details">Username</span>
                <input class="text-box" name="username" type="text" placeholder="Enter your username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input class="text-box" name="password" type="password" placeholder="Enter your password" required>
            </div>
            <input class="button" type="submit" value="Sign In">
        </div>
    </form>
</body>

</html><?php }
}
