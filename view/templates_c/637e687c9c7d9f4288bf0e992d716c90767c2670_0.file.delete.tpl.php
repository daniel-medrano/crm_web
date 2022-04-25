<?php
/* Smarty version 4.1.0, created on 2022-04-25 08:13:18
  from 'C:\xampp\htdocs\crm_web\view\templates\employees\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62663bfe4e4b69_31574465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '637e687c9c7d9f4288bf0e992d716c90767c2670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\employees\\delete.tpl',
      1 => 1650867145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62663bfe4e4b69_31574465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-user">
        <h2 class="title">Delete Employees</h2>
        
        <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['name'];?>
" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['last_name'];?>
" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['email'];?>
" placeholder="Email" disabled>
        <input class="text-box" type="text" name="relation" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['position'];?>
" placeholder="Relation" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_employee&id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_employees">Cancel</a>
        </div>
    </div>
</body>
</html><?php }
}
