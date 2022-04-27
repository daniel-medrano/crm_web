<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:22:28
  from 'C:\xampp\htdocs\crm_web\view\templates\contacts\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268ef34008e22_10660946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4118054445c9225a1901f96cac8dfb3f50edc5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\contacts\\view.tpl',
      1 => 1651044097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268ef34008e22_10660946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container users-view">
        <h2 class="title">Contacts</h2>
        <a class="button" href="index.php?action=show_add_contact">Add</a>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Relation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["contact_id"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["name"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["last_name"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["email"];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["relation"];?>
</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_contact&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['contact_id'];?>
"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_contact&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['contact_id'];?>
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
