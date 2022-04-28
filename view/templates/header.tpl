<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
   <nav>
      <div class="left">
         <div class="page-name">
            <h1>CRM</h1>
         </div>
         <ul>
            {if $isLoggedIn}
               <li><a href="index.php?action=show_reports">Reports</a></li>
               <li><a href="index.php?action=show_products">Products</a></li>
               <li><a href="index.php?action=show_employees">Employees</a></li>
               <li><a href="index.php?action=show_contacts">Contacts</a></li>
            {/if}
            {if $isLoggedIn and $role eq 1}
               <li><a href="index.php?action=show_users">Users</a></li>
            {/if}
         </ul>
      </div>
      <div class="right">
         <ul>
            {if not $isLoggedIn}
               <li><a href="index.php?action=open_login">Login</a></li>
               <li><a href="index.php?action=open_signup">Sign Up</a></li>
            {else}
               <!-- <li><a href="#">Profile</a></li> -->
               <li><a href="logout.php">Log Out</a></li>
            {/if}
         </ul>
      </div>
   </nav>