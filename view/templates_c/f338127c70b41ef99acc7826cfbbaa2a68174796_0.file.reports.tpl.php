<?php
/* Smarty version 4.1.0, created on 2022-04-27 09:40:03
  from 'C:\xampp\htdocs\crm_web\view\templates\reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6268f35344d9d3_76771777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f338127c70b41ef99acc7826cfbbaa2a68174796' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\reports.tpl',
      1 => 1651045195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6268f35344d9d3_76771777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container users-view">
    <h2 class="title">Reports</h2> 
    <h2 class="title">Stock's Report</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Product</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inOuts']->value, 'inOut');
$_smarty_tpl->tpl_vars['inOut']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inOut']->value) {
$_smarty_tpl->tpl_vars['inOut']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["inout_id"];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['inOut']->value["type"] == "Input") {?>
                            <td><img src="img/increase.png" alt=""></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['inOut']->value["type"] == "Output") {?>
                            <td><img src="img/decrease.png" alt=""></td>
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["amount"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["date"];?>
</td>
                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["product"];?>
</td> -->
                        <td><?php echo $_smarty_tpl->tpl_vars['inOut']->value["name"];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <h2 class="title">Payments Per Month</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Amount</th>         
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value["month"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['payment']->value["total_amount"];?>
</td>                 
                    </tr> 
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <h2 class="title">Client's List</h2> 
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th> 
                    <th>Relation</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["contact_id"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["last_name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["email"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value["relation"];?>
</td>                    
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <h2 class="title">User's List</h2>
    <div class="table-wrapper">
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["user_id"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["last_name"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["username"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value["role"];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <br><br><br>
</div>
</body>
</html><?php }
}
