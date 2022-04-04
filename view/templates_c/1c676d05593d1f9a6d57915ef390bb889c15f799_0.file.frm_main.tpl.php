<?php
/* Smarty version 4.1.0, created on 2022-04-03 05:45:24
  from 'C:\xampp\htdocs\crm_web\view\templates\frm_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624918548c94f0_73833304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c676d05593d1f9a6d57915ef390bb889c15f799' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm_web\\view\\templates\\frm_main.tpl',
      1 => 1648957442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624918548c94f0_73833304 (Smarty_Internal_Template $_smarty_tpl) {
?>   <!-- Section: Header -->
   
   <!-- <div id="container-r">
      <div class="content">
         <div class="main-section">
             <div class="text-box">
                 <div class="title">
                     <h2>The CRM of the world.</h2>
                 </div>
                 <div class="text">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores unde ducimus explicabo!
                         Cupiditate, quos ad.</p>
                 </div>
                 <div class="buttons">
                     <button class="learn-more">Learn more</button>
                 </div>
             </div>
             <div class="picture">
                 <img src="img/shield.png" alt="">
             </div>
         </div>
     </div>
   </div> -->
   <div id="container"></div>


   <div class="popup" id="popup">
      <div class="popup-header">
         <div class="title">Edit User</div>
         <button id="close-button" class="close-button">&times;</button>
      </div>
      <form action="index.php" method="post">
         <div class="popup-body">
            <div class="info">

               <input type="hidden" name="action" value="user_update">
               <input type="hidden" name="id_user">
            </div>
            <div class="info">
               <label for="name">Name:</label>
               <input name="name" id="name" type="text" placeholder="Name" required />
            </div>
            <div class="info">
               <label for="last_name">Last Name:</label>
               <input name="last_name" id="last_name" type="text" placeholder="Last Name" required />
            </div>
            <div class="info">
               <label for="username">Username:</label>
               <input name="user" id="username" type="text" placeholder="Usuario" required />
            </div>

            <!-- <input name="password" type="password" placeholder="Contraseña" required/> -->
            <div class="info">
               <label for="role">Role:</label>
               <select name="role" id="role">
                  <option value="1">Admin</option>
                  <option value="0">User</option>
               </select>
            </div>

            <button class="btn btn-info">Save</button>

         </div>
      </form>
   </div>
   <div id="overlay-popup"></div>

   <?php echo '<script'; ?>
 src="js/util.js"><?php echo '</script'; ?>
>
<?php }
}
