<?php
/* Smarty version 4.1.0, created on 2022-04-04 23:34:27
  from 'C:\xampp\htdocs\crm_web2\view\templates\users\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b6463e6d2a1_29104746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bca46cf19ffce314041bdb16074b81442e80bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\users\\edit.tpl',
      1 => 1649108033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624b6463e6d2a1_29104746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_user" method="post">
        <div class="container add-user">
            <h2 class="title">Edit User</h2>
            <input class="text-box" type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">
            <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" placeholder="Name">
            <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" placeholder="Last Name">
            <input class="text-box" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" placeholder="Username">
            <input class="text-box" type="text" name="role" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
" placeholder="Role">
        
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
