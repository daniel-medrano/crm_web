<?php
/* Smarty version 4.1.0, created on 2022-04-28 01:53:54
  from 'C:\xampp\htdocs\crm_web\view\templates\employees\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269d79279bc97_52228595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6512bf6bf822186c06ac64991a73e4b4e3a88e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\employees\\view.tpl',
      1 => 1651045774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269d79279bc97_52228595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <h2 class="title">Employees</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_payments">Payments</a>
            <a class="button" href="index.php?action=show_vacations">Vacations</a>
            <a class="button" href="index.php?action=show_positions">Positions</a>
            <a class="button" href="index.php?action=show_add_employee">Add</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value["employee_id"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value["name"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value["last_name"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value["email"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value["position"];?>
</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_employee&id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_employee&id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
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
