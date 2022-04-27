<?php
/* Smarty version 4.1.0, created on 2022-04-27 06:37:28
  from 'C:\xampp\htdocs\crm_web\view\templates\inouts\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268c888757997_23891491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce58a09b7d58693f8ef34580f245b643e01bf6b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\inouts\\edit.tpl',
      1 => 1651034092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268c888757997_23891491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_inout" method="post">
        <div class="container add-product">
            <h2 class="title">Edit In/Out</h2>
            <input type="hidden" name="inout_id" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['inout_id'];?>
">
            <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['amount'];?>
" placeholder="Amount" required>
            <!-- <input class="text-box" type="text" name="type" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['type'];?>
" placeholder="Type" required> -->
            <input class="text-box" type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['description'];?>
" placeholder="Description" required>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_inouts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>

<?php }
}
