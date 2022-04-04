<?php
/* Smarty version 4.1.0, created on 2022-04-03 05:45:24
  from 'C:\xampp\htdocs\crm_web\view\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62491854840834_82089885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f05afbe04fa3bb7c0f811d51f7309f7c1661975' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\navbar.tpl',
      1 => 1648957480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62491854840834_82089885 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
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
             <li><a href="#" onclick="requestUsersList()">Clients</a></li>
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
