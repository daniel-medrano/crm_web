<?php
/* Smarty version 4.1.0, created on 2022-04-25 08:08:37
  from 'C:\xampp\htdocs\crm_web\view\templates\employees\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62663ae53988d7_55430373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8161eff22b840531a1b67f03d908b7b1303369a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\employees\\edit.tpl',
      1 => 1650866906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62663ae53988d7_55430373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_employee" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Employee</h2>
            <input type="hidden" name="employee_id" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['employee_id'];?>
">
            <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['name'];?>
" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['last_name'];?>
" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['email'];?>
" placeholder="Email" required>
            
            <select class="select" name="position" required>
                <option disabled>Select position</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['position']->value["position_id"] == $_smarty_tpl->tpl_vars['employee']->value["position_id"]) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['position']->value["position"];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['position']->value["position"];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_employees">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
