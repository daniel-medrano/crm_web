<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:12:19
  from 'C:\xampp\htdocs\crm_web\view\templates\products\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268ecd350d286_83504431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0657d3a0bc1829ad2ff0b1c35e5b7ce22059d996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\products\\add.tpl',
      1 => 1651042924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268ecd350d286_83504431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_product" method="post">
        <div class="container add-product">
            <h2 class="title">Add Product</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="amount" placeholder="Amount" required>
            <input class="text-box" type="text" name="supplier" placeholder="Supplier" required>
            <input class="text-box" type="text" name="warehouse" placeholder="Warehouse" required>
            <input class="text-box" type="text" name="price" placeholder="Price" required>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_products">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
