<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:12:36
  from 'C:\xampp\htdocs\crm_web\view\templates\products\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268ece46ac077_82411163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f676a228dad6beccdc8bff50c41758663fe2cdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\products\\edit.tpl',
      1 => 1651043528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268ece46ac077_82411163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_product" method="post">
        <div class="container add-product">
            <h2 class="title">Edit Product</h2>
            <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
">
            <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" placeholder="Name" required>
            <!-- <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['amount'];?>
" placeholder="Amount" required> -->
            <input class="text-box" type="text" name="supplier" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier'];?>
" placeholder="Supplier" required>
            <input class="text-box" type="text" name="warehouse" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['warehouse'];?>
" placeholder="Warehouse" required>
            <input class="text-box" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" placeholder="Price" required>

            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_products">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
