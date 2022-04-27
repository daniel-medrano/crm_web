<?php
/* Smarty version 4.1.0, created on 2022-04-27 05:49:47
  from 'C:\xampp\htdocs\crm_web\view\templates\inouts\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268bd5bdb8e57_00219626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7595838a53c4ee3bbf0b5d8ea8a4854a4853a37e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\inouts\\delete.tpl',
      1 => 1651031163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268bd5bdb8e57_00219626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container add-product">
    <h2 class="title">Delete Product</h2>
    <input class="text-box" type="text" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['inout_id'];?>
" placeholder="Product Id" disabled>
    <input class="text-box" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['amount'];?>
" placeholder="Name" disabled>
    <input class="text-box" type="text" name="type" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['type'];?>
" placeholder="Amount" disabled>
    <input class="text-box" type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['inOut']->value['description'];?>
" placeholder="Description" disabled>
    <div class="buttons">
        <a class="button" href="index.php?action=del_inout&id=<?php echo $_smarty_tpl->tpl_vars['inOut']->value['inout_id'];?>
">Delete</a>
        <a class="button" href="index.php?action=show_inouts">Cancel</a>
    </div>
</div>
</body>
</html><?php }
}
