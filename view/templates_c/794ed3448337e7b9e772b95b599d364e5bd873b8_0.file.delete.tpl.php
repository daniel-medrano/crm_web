<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:10:42
  from 'C:\xampp\htdocs\crm_web\view\templates\products\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268ec7274daf3_42275218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '794ed3448337e7b9e772b95b599d364e5bd873b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\products\\delete.tpl',
      1 => 1651042893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268ec7274daf3_42275218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container add-product">
    <h2 class="title">Delete Product</h2>
    <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" placeholder="Name" disabled>
    <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['amount'];?>
" placeholder="Amount" disabled>
    <input class="text-box" type="text" name="supplier" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier'];?>
" placeholder="Supplier" disabled>
    <input class="text-box" type="text" name="warehouse" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['warehouse'];?>
" placeholder="Warehouse" disabled>
    <div class="buttons">
        <a class="button" href="index.php?action=del_product&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
">Delete</a>
        <a class="button" href="index.php?action=show_products">Cancel</a>
    </div>
</div>
</body>
</html><?php }
}
