<?php
/* Smarty version 4.1.0, created on 2022-04-03 21:24:51
  from 'C:\xampp\htdocs\crm_web2\view\templates\users\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249f483f07fd4_19370477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc8fda42c830a1b01a698b06531e68d781b44de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web2\\view\\templates\\users\\view.tpl',
      1 => 1649013871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6249f483f07fd4_19370477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="users-view">
        <a href="index.php?action=show_add_user">Add</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["id_user"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["last_name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["username"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["role"];?>
</td>
                        <td><a href="index.php?action=show_edit_user&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Edit</a> <a href="index.php?action=show_del_user&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Delete</a></td>
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
