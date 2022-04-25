<?php
/* Smarty version 4.1.0, created on 2022-04-25 09:08:58
  from 'C:\xampp\htdocs\crm_web\view\templates\positions\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6266490a109b09_88362259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '688c3661f4251acc75528c8ff5131c151782cf63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\positions\\add.tpl',
      1 => 1650870499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6266490a109b09_88362259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_position" method="post">
        <div class="container add-user">
            <h2 class="title">Add Position</h2>
            <input class="text-box" type="text" name="position" placeholder="Position" required>
            <input class="text-box" type="text" name="salary" placeholder="Salary" required>
            
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_positions">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
