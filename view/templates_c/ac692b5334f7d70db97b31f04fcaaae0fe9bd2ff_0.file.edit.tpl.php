<?php
/* Smarty version 4.1.0, created on 2022-04-05 00:18:51
  from 'C:\xampp\htdocs\crm_web\view\templates\users\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b6ecbe55f26_57761482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac692b5334f7d70db97b31f04fcaaae0fe9bd2ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\users\\edit.tpl',
      1 => 1649110698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624b6ecbe55f26_57761482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_user" method="post">
        <div class="container add-user">
            <h2 class="title">Edit User</h2>
            <input class="text-box" type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
            <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" placeholder="Last Name" required>
            <input class="text-box" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" placeholder="Username" required>
            <input class="text-box" type="text" name="role" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
" placeholder="Role" required>
        
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
