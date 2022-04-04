<?php
/* Smarty version 4.1.0, created on 2022-04-04 23:42:36
  from 'C:\xampp\htdocs\crm_web2\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b664c604c47_03009101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d65fb6a6dfc1ed787b9f8702cc78c10a55931e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\header.tpl',
      1 => 1649108544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b664c604c47_03009101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/table.css">
   <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
   <nav>
      <div class="left">
         <div class="page-name">
            <h1>CRM</h1>
         </div>
         <ul>
            <li>Home</li>
            <li>About</li>
            <li>Services</li>
            <li>Portfolio</li>
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
               <li><a href="#">Clients</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value && $_smarty_tpl->tpl_vars['role']->value == 1) {?>
               <li><a href="index.php?action=show_users">Users</a></li>
            <?php }?>
         </ul>
      </div>
      <div class="right">
         <ul>
            <?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
               <li><a href="index.php?action=open_login">Login</a></li>
               <li><a href="index.php?action=open_signup">Sign Up</a></li>
            <?php } else { ?>
               <li><a href="logout.php">Log Out</a></li>
            <?php }?>
         </ul>
      </div>
   </nav><?php }
}
