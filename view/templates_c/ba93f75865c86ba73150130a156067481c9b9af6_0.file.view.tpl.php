<?php
/* Smarty version 4.1.0, created on 2022-04-25 09:06:41
  from 'C:\xampp\htdocs\crm_web\view\templates\positions\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62664881431f01_74286669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba93f75865c86ba73150130a156067481c9b9af6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\positions\\view.tpl',
      1 => 1650869988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62664881431f01_74286669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <div class="buttons">
            <a class="button" href="index.php?action=show_employees">Return</a>
            <a class="button" href="index.php?action=show_add_position">Add</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position Name</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['position']->value["position_id"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['position']->value["position"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['position']->value["salary"];?>
</td>
                        <td class="actions">
                            <a href="index.php?action=show_edit_position&id=<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
"><img src="img/edit.png" alt=""></a>
                            <a href="index.php?action=show_del_position&id=<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
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
