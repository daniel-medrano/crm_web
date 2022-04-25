<?php
/* Smarty version 4.1.0, created on 2022-04-25 09:18:57
  from 'C:\xampp\htdocs\crm_web\view\templates\positions\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62664b61dc91b4_95608372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aeaa129044e248da6c940b499cb013add000fc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\positions\\delete.tpl',
      1 => 1650869885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62664b61dc91b4_95608372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-user">
        <h2 class="title">Delete Position</h2>
        
        <input class="text-box" type="text" name="position" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position'];?>
" placeholder="Position" disabled>
        <input class="text-box" type="text" name="salary" value="<?php echo $_smarty_tpl->tpl_vars['position']->value['salary'];?>
" placeholder="Salary" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_position&id=<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_positions">Cancel</a>
        </div>
    </div>
</body>
</html><?php }
}
