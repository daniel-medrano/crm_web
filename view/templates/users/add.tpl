{include file="header.tpl"}

    <form action="index.php?action=add_user" method="post">
        <div class="container add-user">
            <h2 class="title">Add User</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" placeholder="Last Name" required>
            <input class="text-box" type="text" name="username" placeholder="Username" required>
            <input class="text-box" type="password" name="password" placeholder="Password" required>
            <select class="select" name="role" required>
                <option disabled selected>Select role</option>
                <option value="1">User</option>
                <option value="2">Administrator</option>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_users">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>