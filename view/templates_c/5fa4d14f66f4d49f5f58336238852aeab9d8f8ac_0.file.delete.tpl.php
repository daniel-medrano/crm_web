<?php
/* Smarty version 4.1.0, created on 2022-04-27 08:27:54
  from 'C:\xampp\htdocs\crm_web\view\templates\payments\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268e26abc1f98_03234207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fa4d14f66f4d49f5f58336238852aeab9d8f8ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\payments\\delete.tpl',
      1 => 1651040857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268e26abc1f98_03234207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-user">
        <h2 class="title">Delete Payment</h2>
        <input class="text-box" type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value['date'];?>
" placeholder="Date" disabled>
        <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value['amount'];?>
" placeholder="Amount" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_payment&id=<?php echo $_smarty_tpl->tpl_vars['payment']->value['payment_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_payments">Cancel</a>
        </div>
    </div>
</body>
</html>
<?php }
}
