<?php
/* Smarty version 4.1.0, created on 2022-04-06 02:49:14
  from 'C:\xampp\htdocs\crm_web\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ce38a35d7a9_59582023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4627e0d70c61be14f848bfb02fc21cd2979f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\header.tpl',
      1 => 1649206152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624ce38a35d7a9_59582023 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico">
   <link rel="stylesheet" type="text/css" href="css/11.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
               <li><a href="index.php?action=show_contacts">Contacts</a></li>
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
               <li><a href="#">Profile</a></li>
               <li><a href="logout.php">Log Out</a></li>
            <?php }?>
         </ul>
      </div>
   </nav><?php }
}
