<?php
/* Smarty version 4.1.0, created on 2022-04-28 01:55:31
  from 'C:\xampp\htdocs\crm_web\view\templates\payments\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269d7f39f4268_54981861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c03d42cbd84736785d854da18afc24810ace79d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\payments\\view.tpl',
      1 => 1651044916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269d7f39f4268_54981861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <h2 class="title">Payments</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_employees">Return</a>
            <a class="button" href="index.php?action=show_cal_payment">Calculate</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['payment']->value["payment_id"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['payment']->value["date"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['payment']->value["amount"];?>
</td>
                            <td class="actions">
                                <a href="index.php?action=show_del_payment&id=<?php echo $_smarty_tpl->tpl_vars['payment']->value['payment_id'];?>
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
