<?php
/* Smarty version 4.1.0, created on 2022-04-26 08:41:30
  from 'C:\xampp\htdocs\crm_web\view\templates\inouts\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6267941a8db055_66149244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834ef6173dfa52918a04b1a27be20b0fc606b996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\inouts\\view.tpl',
      1 => 1650955287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6267941a8db055_66149244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <div class="buttons">
            <a class="button" href="index.php?action=show_products">Return</a>
            <a class="button" href="index.php?action=show_add_inout">Add</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inOuts']->value, 'inOut');
$_smarty_tpl->tpl_vars['inOut']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inOut']->value) {
$_smarty_tpl->tpl_vars['inOut']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["inout_id"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["type"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["amount"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["date"];?>
</td>
                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["product"];?>
</td> -->
                        <td>Product</td>
                        <td class="actions">
                            <a href="index.php?action=show_edit_inout&id=<?php echo $_smarty_tpl->tpl_vars['inOut']->value['inout_id'];?>
"><img src="img/edit.png" alt=""></a>
                            <a href="index.php?action=show_del_inout&id=<?php echo $_smarty_tpl->tpl_vars['inOut']->value['inout_id'];?>
"><img src="img/delete.png" alt=""></a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
