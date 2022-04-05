<?php
/* Smarty version 4.1.0, created on 2022-04-05 09:33:10
  from 'C:\xampp\htdocs\crm_web\view\templates\contacts\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624bf0b62c5ba4_10409806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1210609203722f5ebe21cf083ff1199ee836fa19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\contacts\\delete.tpl',
      1 => 1649143986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_624bf0b62c5ba4_10409806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container add-contact">
        <h2 class="title">Delete Contact</h2>
        <!-- <input class="text-box" type="hidden" name="contact_id" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['contact_id'];?>
" disabled> -->
        <input class="text-box" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['last_name'];?>
" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
" placeholder="Email" disabled>
        <input class="text-box" type="text" name="relation" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['relation'];?>
" placeholder="Relation" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_contact&id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['contact_id'];?>
">Delete</a>
            <a class="button" href="index.php?action=show_contacts">Cancel</a>
        </div>
    </div>
</body>
</html><?php }
}
