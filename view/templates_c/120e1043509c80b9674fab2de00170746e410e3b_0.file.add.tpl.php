<?php
/* Smarty version 4.1.0, created on 2022-04-04 23:35:49
  from 'C:\xampp\htdocs\crm_web2\view\templates\users\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b64b5821a51_25990675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120e1043509c80b9674fab2de00170746e410e3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\users\\add.tpl',
      1 => 1649108027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624b64b5821a51_25990675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_user" method="post">
        <div class="container add-user">
            <h2 class="title">Add User</h2>
            <input type="hidden" name="id_user">
            <input class="text-box" type="text" name="name" placeholder="Name">
            <input class="text-box" type="text" name="last_name" placeholder="Last Name">
            <input class="text-box" type="text" name="username" placeholder="Username">
            <input class="text-box" type="password" name="password" placeholder="Password">
            <input class="text-box" type="text" name="role" placeholder="Role">
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}