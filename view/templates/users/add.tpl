{include file="header.tpl"}

    <form action="index.php?action=add_user" method="post">
        <div class="container add-user">
            <h2 class="title">Add User</h2>
            <input type="hidden" name="id_user">
            <input class="text-box" type="text" name="name" placeholder="Name">
            <input class="text-box" type="text" name="last_name" placeholder="Last Name">
            <input class="text-box" type="text" name="username" placeholder="Username">
            <input class="text-box" type="password" name="password" placeholder="Password">
            <input class="text-box" type="text" name="role" placeholder="Role">
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>