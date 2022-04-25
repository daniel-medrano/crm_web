<?php
/* Smarty version 4.1.0, created on 2022-04-25 08:08:31
  from 'C:\xampp\htdocs\crm_web\view\templates\employees\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62663adf69afa2_34101381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df12e53964d31749352406a45ecd6eb348e50198' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\employees\\add.tpl',
      1 => 1650866909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_62663adf69afa2_34101381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_employee" method="post">
        <div class="container add-user">
            <h2 class="title">Add Employees</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" placeholder="Email" required>
            
            <select class="select" name="position" required>
                <option disabled selected>Select position</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['position_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['position']->value["position"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_employees">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
