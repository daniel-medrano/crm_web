<?php
/* Smarty version 4.1.0, created on 2022-04-06 01:03:48
  from 'C:\xampp\htdocs\crm_web\view\templates\users\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ccad4c5aed5_78534522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74aff3785ae813744081caa91a32e7a7a93930b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\users\\delete.tpl',
      1 => 1649199823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624ccad4c5aed5_78534522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-user">
        <h2 class="title">Delete User</h2>
        <input class="text-box" type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
" disabled>
        <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" placeholder="Username" disabled>
        <?php if ($_smarty_tpl->tpl_vars['user']->value['role_id'] == 1) {?>
            <input class="text-box" type="text" name="role" value="Administrator" placeholder="Role" disabled>
        <?php } else { ?> 
            <input class="text-box" type="text" name="role" value="User" placeholder="Role" disabled>
        <?php }?>
        <div class="buttons">
            <a class="button" href="index.php?action=del_user&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_users">Cancel</a>
        </div>
    </div>
</body>
</html><?php }
}
