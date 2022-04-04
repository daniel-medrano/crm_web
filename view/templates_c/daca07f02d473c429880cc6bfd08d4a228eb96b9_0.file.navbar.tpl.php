<?php
/* Smarty version 4.1.0, created on 2022-04-03 19:37:24
  from 'C:\xampp\htdocs\crm_web2\view\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249db54cd8512_47986364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daca07f02d473c429880cc6bfd08d4a228eb96b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\navbar.tpl',
      1 => 1648957480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249db54cd8512_47986364 (Smarty_Internal_Template $_smarty_tpl) {
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
