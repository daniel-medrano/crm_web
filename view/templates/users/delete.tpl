{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete User</h2>
        <input class="text-box" type="hidden" name="id_user" value="{$user['id_user']}" disabled>
        <input class="text-box" type="text" name="name" value="{$user['name']}" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="{$user['last_name']}" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="username" value="{$user['username']}" placeholder="Username" disabled>
        <input class="text-box" type="text" name="role" value="{$user['role']}" placeholder="Role" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_user&id={$user['id_user']}">Delete</a>
            <a class="button" href="index.php?action=show_users">Cancel</a>
        </div>
    </div>
</body>
</html>