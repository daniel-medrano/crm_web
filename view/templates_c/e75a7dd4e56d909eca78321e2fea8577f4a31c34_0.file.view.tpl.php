<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:37:06
  from 'C:\xampp\htdocs\crm_web\view\templates\vacations\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268f2a205b645_11833655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75a7dd4e56d909eca78321e2fea8577f4a31c34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\vacations\\view.tpl',
      1 => 1651045023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268f2a205b645_11833655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <h2 class="title">Vacations</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_employees">Return</a>
            <a class="button" href="index.php?action=show_add_vacation">Add</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Days</th>
                        <th>Date</th>
                        <th>Employee ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vacations']->value, 'vacation');
$_smarty_tpl->tpl_vars['vacation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vacation']->value) {
$_smarty_tpl->tpl_vars['vacation']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['vacation']->value["vacation_id"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['vacation']->value["days"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['vacation']->value["vacation_date"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['vacation']->value["employee_id"];?>
</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_vacation&id=<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_id'];?>
"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_vacation&id=<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_id'];?>
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
</body>
</html><?php }
}
