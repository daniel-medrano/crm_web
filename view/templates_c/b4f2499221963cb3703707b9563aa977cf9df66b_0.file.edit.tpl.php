<?php
/* Smarty version 4.1.0, created on 2022-04-27 02:41:29
  from 'C:\xampp\htdocs\crm_web\view\templates\vacations\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62689139506d19_36989406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f2499221963cb3703707b9563aa977cf9df66b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\vacations\\edit.tpl',
      1 => 1651020085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62689139506d19_36989406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_vacation" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Vacation</h2>
            <input type="hidden" name="vacation_id" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_id'];?>
">
            <input class="text-box" type="text" name="days" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['days'];?>
" placeholder="Days" required>
            <input class="text-box" type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_date'];?>
" placeholder="Date" required>
        
            <select class="select" name="employee_id" required>
                <option value="" disabled selected>Select employee</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vacation']->value["employee_id"] == $_smarty_tpl->tpl_vars['employee']->value['employee_id']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['employee']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value["last_name"];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value["last_name"];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_vacations">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
