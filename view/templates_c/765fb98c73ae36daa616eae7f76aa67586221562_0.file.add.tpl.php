<?php
/* Smarty version 4.1.0, created on 2022-04-28 02:05:29
  from 'C:\xampp\htdocs\crm_web\view\templates\inouts\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269da49b0c6a5_73466568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765fb98c73ae36daa616eae7f76aa67586221562' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\inouts\\add.tpl',
      1 => 1650955879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269da49b0c6a5_73466568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_inout" method="post">
        <div class="container add-product">
            <h2 class="title">Stock In/Out</h2>
            <input class="text-box" type="text" name="amount" placeholder="Amount" required>
            <select class="select" name="type" required>
                <option disabled selected>Select type</option>
                <option value="Input">Input</option>
                <option value="Output">Output</option>
            </select>
            <input class="text-box" type="text" name="description" placeholder="Description" required>
            <input class="text-box" type="date" name="date" required>
            <select class="select" name="product_id" required>
                <option disabled selected>Select product</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_inouts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
