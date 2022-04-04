{include file="header.tpl"}

    <form action="index.php?action=edit_user" method="post">
        <div class="container add-user">
            <h2 class="title">Edit User</h2>
            <input class="text-box" type="hidden" name="id_user" value="{$user['id_user']}">
            <input class="text-box" type="text" name="name" value="{$user['name']}" placeholder="Name">
            <input class="text-box" type="text" name="last_name" value="{$user['last_name']}" placeholder="Last Name">
            <input class="text-box" type="text" name="username" value="{$user['username']}" placeholder="Username">
            <input class="text-box" type="text" name="role" value="{$user['role']}" placeholder="Role">
        
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>