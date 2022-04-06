<?php
/* Smarty version 4.1.0, created on 2022-04-06 00:49:21
  from 'C:\xampp\htdocs\crm_web\view\templates\users\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624cc77133b3b0_20067004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e2da74cadd622b4423c02b9e58cd4dc6e8ffd3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\users\\add.tpl',
      1 => 1649198844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624cc77133b3b0_20067004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_user" method="post">
        <div class="container add-user">
            <h2 class="title">Add User</h2>
            <input type="hidden" name="id_user">
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" placeholder="Last Name" required>
            <input class="text-box" type="text" name="username" placeholder="Username" required>
            <input class="text-box" type="password" name="password" placeholder="Password" required>
            <select class="select" name="role" required>
                <option disabled selected>Select role</option>
                <option value="1">User</option>
                <option value="2">Administrator</option>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
