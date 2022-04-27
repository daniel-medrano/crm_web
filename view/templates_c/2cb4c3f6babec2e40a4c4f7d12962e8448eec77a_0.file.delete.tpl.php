<?php
/* Smarty version 4.1.0, created on 2022-04-27 02:52:37
  from 'C:\xampp\htdocs\crm_web\view\templates\vacations\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626893d50f1e92_13054253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cb4c3f6babec2e40a4c4f7d12962e8448eec77a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\vacations\\delete.tpl',
      1 => 1651020712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_626893d50f1e92_13054253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-user">
        <h2 class="title">Delete Vacation</h2>

        <input class="text-box" type="text" name="days" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['days'];?>
" placeholder="Days" disabled>
        <input class="text-box" type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_date'];?>
" placeholder="Date" disabled>
        <input class="text-box" type="text" name="full_name" value="<?php echo $_smarty_tpl->tpl_vars['vacation']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value['last_name'];?>
" placeholder="Name" disabled>

        <div class="buttons">
            <a class="button" href="index.php?action=del_vacation&id=<?php echo $_smarty_tpl->tpl_vars['vacation']->value['vacation_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_vacations">Cancel</a>
        </div>
    </div>
</body>
</html><?php }
}
