<?php
/* Smarty version 4.1.0, created on 2022-04-25 09:14:38
  from 'C:\xampp\htdocs\crm_web\view\templates\positions\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62664a5ead8143_32059427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32fada7f9b1bc7bb7ce02dd8a6bc61e13cc5f190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\positions\\edit.tpl',
      1 => 1650869886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62664a5ead8143_32059427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_position" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Position</h2>
            <input type="hidden" name="position_id" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
">
            <input class="text-box" type="text" name="position" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position'];?>
" placeholder="Position" required>
            <input class="text-box" type="text" name="salary" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['salary'];?>
" placeholder="Salary" required>
            
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_positions">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
