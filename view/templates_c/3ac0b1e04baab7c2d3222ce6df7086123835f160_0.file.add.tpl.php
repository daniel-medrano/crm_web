<?php
/* Smarty version 4.1.0, created on 2022-04-28 02:06:47
  from 'C:\xampp\htdocs\crm_web\view\templates\vacations\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6269da97508a84_47181430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac0b1e04baab7c2d3222ce6df7086123835f160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\vacations\\add.tpl',
      1 => 1651018727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6269da97508a84_47181430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_vacation" method="post">
        <div class="container add-user">
            <h2 class="title">Add Vacation</h2>
            <input class="text-box" type="text" name="days" placeholder="Days" required>
            <input class="text-box" type="date" name="date" placeholder="Date" required>
            <select class="select" name="employee_id" required>
                <option disabled selected>Select employee</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value["last_name"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_vacations">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
