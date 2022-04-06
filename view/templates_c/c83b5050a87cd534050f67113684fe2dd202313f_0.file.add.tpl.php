<?php
/* Smarty version 4.1.0, created on 2022-04-06 02:50:46
  from 'C:\xampp\htdocs\crm_web\view\templates\contacts\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ce3e6d0bf30_38502127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83b5050a87cd534050f67113684fe2dd202313f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\contacts\\add.tpl',
      1 => 1649206233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624ce3e6d0bf30_38502127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=add_contact" method="post">
        <div class="container add-user">
            <h2 class="title">Add Contact</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" placeholder="Email" required>
            <select class="select" name="relation" required>
                <option disabled selected>Select relation</option>
                <option value="Client">Client</option>
                <option value="Lead">Lead</option>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_contacts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
