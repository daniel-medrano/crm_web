<?php
/* Smarty version 4.1.0, created on 2022-04-28 02:07:15
  from 'C:\xampp\htdocs\crm_web\view\templates\payments\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269dab3e8e944_67243699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fc6a3a59bd51b2c8b13aecb19fd151d2a3bda29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\payments\\add.tpl',
      1 => 1651104433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269dab3e8e944_67243699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_payment" method="post">
        <div class="container add-user">
            <h2 class="title">Payment Details</h2>
            <input class="text-box" type="date" name="date" placeholder="Date" required>
            <input class="text-box" type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['salary_payment']->value;?>
" placeholder="Amount">
            <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['salary_payment']->value;?>
" placeholder="Amount" disabled>
            <div class="buttons">
                <input class="button" type="submit" value="Pay">
                <a class="button" href="index.php?action=show_payments">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
