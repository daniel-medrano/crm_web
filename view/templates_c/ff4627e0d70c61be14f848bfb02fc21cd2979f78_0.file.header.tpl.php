<?php
/* Smarty version 4.1.0, created on 2022-04-03 05:34:01
  from 'C:\xampp\htdocs\crm_web\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624915a9a18c04_79539601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4627e0d70c61be14f848bfb02fc21cd2979f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\header.tpl',
      1 => 1648956840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_624915a9a18c04_79539601 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico">
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" type="text/css" href="css/modal-style.css">
   <link rel="stylesheet" type="text/css" href="css/table.css">
   <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
   <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
