<?php
/* Smarty version 4.1.0, created on 2022-04-06 02:50:51
  from 'C:\xampp\htdocs\crm_web\view\templates\contacts\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ce3eba50d64_08357008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea53a60b1f3507de0ae8731a47cd6b68cc72c1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\contacts\\edit.tpl',
      1 => 1649206242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624ce3eba50d64_08357008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="index.php?action=edit_contact" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Contact</h2>
            <input type="hidden" name="contact_id" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['contact_id'];?>
">
            <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['last_name'];?>
" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
" placeholder="Email" required>
            <select class="select" name="relation" required>
                <option disabled>Select relation</option>
                <?php if ($_smarty_tpl->tpl_vars['contact']->value["relation"] == "Client") {?>
                    <option value="Client" selected>Client</option>
                    <option value="Lead">Lead</option>
                <?php } else { ?>
                    <option value="Client">Client</option>
                    <option value="Lead" selected>Lead</option>
                <?php }?>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_contacts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
