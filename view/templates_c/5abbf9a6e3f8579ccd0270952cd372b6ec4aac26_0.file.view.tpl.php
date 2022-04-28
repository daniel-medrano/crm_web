<?php
/* Smarty version 4.1.0, created on 2022-04-28 01:53:52
  from 'C:\xampp\htdocs\crm_web\view\templates\products\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269d790dcd8f2_25390261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5abbf9a6e3f8579ccd0270952cd372b6ec4aac26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\products\\view.tpl',
      1 => 1651103572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269d790dcd8f2_25390261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <h2 class="title">Products</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_inouts">In/Out</a>
            <a class="button" href="index.php?action=show_add_product">Add</a>
            <select class="select filter"" id="warehousesDropdown">
                <option value="All">All</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warehouses']->value, 'warehouse');
$_smarty_tpl->tpl_vars['warehouse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['warehouse'];?>
"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value["warehouse"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Supplier</th>
                        <th>Warehouse</th>
                        <th>Price</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["product_id"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["amount"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["supplier"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["warehouse"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["price"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['product']->value["total_price"];?>
</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_product&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_product&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/filter.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
